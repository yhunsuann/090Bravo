<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Repositories\Interfaces\RecruitmentRepositoryInterface;
use App\Repositories\Interfaces\LanguageRepositoryInterface;
use App\Services\FileUploader;
use App\Http\Controllers\Controller;

class RecruitmentAdminController extends Controller
{
    private $recruitmentRepository;
    private $languageRepository;
    protected $fileUploader;

    public function __construct(
        RecruitmentRepositoryInterface $recruitmentRepository, 
        FileUploader $fileUploader,
        LanguageRepositoryInterface $languageRepository
    ) {
        $this->recruitmentRepository = $recruitmentRepository;
        $this->languageRepository = $languageRepository;
        $this->fileUploader = $fileUploader;
    }

    public function index()
    { 
        $value = $this->recruitmentRepository->allRecruitments();
        
        return view('admin.recruitment.home', ['result' => $value]);    
    }

    public function createRecruitment()
    {
        $data = $this->languageRepository->listLanguageRecruitment();
        return view('admin.recruitment.create')->with('result',$data);
    }

    public function addRecruitment(Request $request)
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

        return redirect()->route('index')->with('success', 'Create Recruitments Successful');
    }

    public function deleteRecruitment($id)
    {
        $this->recruitmentRepository->deleteCruitments($id);

        return redirect()->route('index')->with('success', 'Delete Recruitments Successful'); 
    }

    public function editRecruitment($id)
    {
        $data = $this->recruitmentRepository->editCruitments($id);

        return view('admin.recruitment.edit', ['result' => $data]);
    }

    public function updateRecruitment(Request $request,$id)
    { 
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

        return redirect()->route('index')->with('success', 'Edit Recruitments Successful');
    }

    public function deleteSelect(Request $request)
    {
        if (!$request->filled('ids')) {
            return redirect()->back()->with('success', 'Please select at least 1 object to delete'); 
        } else {
            $ids = $request->ids;
            $this->recruitmentRepository->deleteMutipleBaseIds($ids);

            return redirect()->route('index')->with('success', 'Delete Recruitments Successful');
        }
    }

    public function searchData(Request $request)
    {
        if (!$request->filled('keyword') && !$request->filled('status') && !$request->filled('dateTo') && !$request->filled('dateFrom')) {
            return redirect()->route('index');
        } else {
            $result = $this->recruitmentRepository->allRecruitments($request->all());
            
            return view('admin.recruitment.home')->with('result',$result);
        }        
    }
}
