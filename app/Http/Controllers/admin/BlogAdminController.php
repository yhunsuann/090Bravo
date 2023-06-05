<?php

namespace App\Http\Controllers\admin;
use App\Repositories\Interfaces\BlogRepositoryInterface;
use App\Repositories\Interfaces\LanguageRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Services\FileUploader;
use App\Http\Controllers\Controller;

class BlogAdminController extends Controller
{
  protected $blogRepository;
  private $languageRepository;
  protected $fileUploader;
  
  public function __construct(
    BlogRepositoryInterface $blogRepository, 
    FileUploader $fileUploader, 
    LanguageRepositoryInterface $languageRepository
  ) {
      $this->blogRepository = $blogRepository;
      $this->languageRepository = $languageRepository;
      $this->fileUploader = $fileUploader;
  }

  public function index()
  {
    $value = $this->blogRepository->allBlog();
 
    return view('admin.blog.home',['result' => $value]);
  }

  public function searchData(Request $request)
  {
      if (!$request->filled('keyword') && !$request->filled('status')) {
          return redirect()->route('index_blog');
      } else {
          $result = $this->blogRepository->allBlog($request->all());
          
          return view('admin.blog.home')->with('result',$result);
      }        
  }

  public function createBlog()
  {
      $data = $this->languageRepository->listLanguageBlog();
  
      return view('admin.blog.create')->with('result',$data);
  }

  public function addBlog(Request $request)
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
          $file_name = $this->fileUploader->uploadFileBlog($request);

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

      $this->blogRepository->addBlog($data);

      return redirect()->route('index_blog')->with('success', 'Create Blog Successful');
  }

  public function deleteSelect(Request $request)
  {
      if (!$request->filled('ids')) {
          return redirect()->back()->with('success', 'Please select at least 1 object to delete'); 
      } else {
          $ids = $request->ids;
          $this->blogRepository->deleteMutipleBaseIds($ids);

          return redirect()->route('index_blog')->with('success', 'Delete Blog Successful');
      }
  }

  public function deleteBlog($id)
  {
      $this->blogRepository->deleteBlog($id);

      return redirect()->route('index_blog')->with('success', 'Delete Blog Successful'); 
  }

  public function editBlog($id)
  {
      $data = $this->blogRepository->editBlog($id);
 
      return view('admin.blog.edit', ['result' => $data]);
  }

  public function updateBlog(Request $request, $id)
  { 
      $qty = count($request['count']);
      $data = array();
      if ($request->has('upload_image')) {
          $file_name = $this->fileUploader->uploadFileBlog($request);
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

      $this->blogRepository->updateBlog($data, $id);

      return redirect()->route('index_blog')->with('success', 'Edit Blog Successful');
  }

}
