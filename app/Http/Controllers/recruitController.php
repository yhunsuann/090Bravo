<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Repositories\Interfaces\RecruitmentRepositoryInterface;
use App\Services\FileUploader;

class RecruitController extends Controller
{
    private $recruitmentRepository;
    protected $fileUploader;

    public function __construct(RecruitmentRepositoryInterface $recruitmentRepository, FileUploader $fileUploader)
    {
        $this->recruitmentRepository = $recruitmentRepository;
        $this->fileUploader = $fileUploader;
    }

    public function addRecruitment(Request $request)
    {
        $time = Carbon::now();
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'upload_image' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('success', 'Please enter full information !'); 
        }

        if ($request->has('upload_image')) {
            $file_name = $this->fileUploader->uploadFile($request);
            if ($file_name !== null) {
                $request->merge(['image' => $file_name]);
            }
        }
        
        $data = array();
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['description'] = $request->description;
        $data['image'] = $request->image;
        $data['created_at'] =  $time->toDateTimeString();
        $data['status'] = $request->status;

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

        return view('admin.edit', ['data' => $data[0]]);
    }

    public function updateRecruitment(Request $request,$id)
    { 
        $data = array();
        if ($request->has('upload_image')) {
            $file_name = $this->fileUploader->uploadFile($request);
            if ($file_name !== null) {
                $request->merge(['image' => $file_name]);
            }
        }

        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['description'] = $request->description;
        $data['status'] = $request->status;
        $data['image'] = $request->image;

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
            $data = $this->recruitmentRepository->searchCruitments($request->all());

            return view('admin.home', ['result' => $data]); 
        }        
    }
}
