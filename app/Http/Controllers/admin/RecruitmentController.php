<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Repositories\Interfaces\RecruitmentRepositoryInterface;
use App\Repositories\Interfaces\LanguageRepositoryInterface;
use App\Services\FileUploader;
use App\Http\Controllers\Controller;

class RecruitmentController extends Controller
{    
    /**
     * recruitmentRepository
     *
     * @var mixed
     */
    protected $recruitmentRepository;
        
    /**
     * languageRepository
     *
     * @var mixed
     */
    protected $languageRepository;
        
    /**
     * fileUploader
     *
     * @var mixed
     */
    protected $fileUploader;
    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        RecruitmentRepositoryInterface $recruitmentRepository, 
        LanguageRepositoryInterface $languageRepository
    ) {
        $this->recruitmentRepository = $recruitmentRepository;
        $this->languageRepository = $languageRepository;
        $this->fileUploader = new FileUploader;
    }
    
    /**
     * get index page
     *
     * @return void
     */
    public function index(Request $request)
    { 
        $recruitments = $this->recruitmentRepository->allRecruitments($request->all());

        return view('admin.recruitment.index', compact('recruitments'));    
    }
    
    /**
     * Create recruitment page
     *
     * @return void
     */
    public function create()
    {
        $data = $this->languageRepository->listLanguageRecruitment();
        return view('admin.recruitment.create')->with('result',$data);
    }
    
    /**
     * Add recruitment
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $qty = count($request['count']);
        $time = Carbon::now();
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'upload_image' => 'required|image',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('success', 'Please enter full information !'); 
        }

        if (in_array(null, $request['content']) |in_array(null, $request['title']) | in_array(null, $request['description'])  ) {
            return redirect()->back()->with('success', 'Please enter full information !'); 
        }

        if ($request->has('upload_image')) {
            $file_name = $this->fileUploader->uploadFileRecruitment($request);
            if ($file_name !== null) {
                $request->merge(['image' => $file_name]);
            }
        }
     
        $data = array();
        $data['image'] = $request->image;
        $data['created_at'] =  $time->toDateTimeString();
        $data['status'] = $request->status;
        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');
        $data['description'] = $request->input('description');
        $data['language_code'] = $request->input('language_code');
        $data['count'] = $qty;

        $this->recruitmentRepository->addRecruitments($data);

        return redirect()->route('admin.recruitment.index')->withSuccess('Create Recruitments Successful');
    }
    
    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        $this->recruitmentRepository->deleteCruitments($id);

        return back()->withSuccess('Delete Recruitments Successful'); 
    }
    
    /**
     * edit
     *
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {
        $data = $this->recruitmentRepository->editCruitments($id);

        return view('admin.recruitment.edit', ['result' => $data]);
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(Request $request, $id)
    { 
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors('Please enter full information !'); 
        }

        if (in_array(null, $request['content']) |in_array(null, $request['title']) | in_array(null, $request['description'])  ) {
            return back()->withErrors('Please enter full information !'); 
        }

        $qty = count($request['count']);
        $data = array();
        if ($request->has('upload_image')) {
            $file_name = $this->fileUploader->uploadFileRecruitment($request);
            if ($file_name !== null) {
                $request->merge(['image' => $file_name]);
            }
        }
        
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['description'] = $request->description;
        $data['status'] = $request->status;
        $data['image'] = $request->image;
        $data['count'] = $qty;
        $data['language_code'] = $request->language_code;

        $this->recruitmentRepository->updateCruitments($data,$id);

        return redirect()->route('admin.recruitment.index')->withSuccess('Edit Recruitments Successful');
    }
    
    /**
     * deletes
     *
     * @param  mixed $request
     * @return void
     */
    public function deletes(Request $request)
    {
        if (!$request->filled('ids')) {
            return back()->withErrors('Please select at least 1 object to delete'); 
        } else {
            $ids = $request->ids;
            $this->recruitmentRepository->deleteMutipleBaseIds($ids);

            return back()->withSuccess('Delete Recruitments Successful');
        }
    }
}
