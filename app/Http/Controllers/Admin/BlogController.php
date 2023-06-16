<?php

namespace App\Http\Controllers\Admin;
use App\Repositories\Interfaces\BlogRepositoryInterface;
use App\Repositories\Interfaces\LanguageRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Services\FileUploader;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{  
  /**
   * blogRepository
   *
   * @var mixed
   */
  protected $blogRepository;
    
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
    BlogRepositoryInterface $blogRepository, 
    LanguageRepositoryInterface $languageRepository
  ) {
    $this->blogRepository = $blogRepository;
    $this->languageRepository = $languageRepository;
    $this->fileUploader = new FileUploader;
  }
  
  /**
   * index
   *
   * @return void
   */
  public function index(Request $request)
  {
    $blogs = $this->blogRepository->allBlog($request->all());
 
    return view('admin.blog.index', compact('blogs'));
  }
  
  /**
   * create
   *
   * @return void
   */
  public function create()
  {
    $data = $this->languageRepository->listLanguageBlog();

    return view('admin.blog.create')->with('result', $data);
  }
  
  /**
   * store
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
        return back()->withErrors('Please enter full information !'); 
    }

    if (in_array(null, $request['content']) |in_array(null, $request['title']) | in_array(null, $request['description'])  ) {
    return back()->withError('Please enter full information !'); 
    }

    if ($request->has('upload_image')) {
        $file_name = $this->fileUploader->uploadFile($request, 'blog');

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

    return redirect()->route('admin.blog.index')->with('success', 'Create Blog Successfully');
  }
  
  /**
   * deleteSelect
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
        $this->blogRepository->deleteMutipleBaseIds($ids);

        return redirect()->route('admin.blog.index')->with('success', 'Delete Blog Successfully');
    }
  }
  
  /**
   * delete
   *
   * @param  mixed $id
   * @return void
   */
  public function delete($id)
  {
    $this->blogRepository->deleteBlog($id);

    return redirect()->route('admin.blog.index')->with('success', 'Delete Blog Successfully'); 
  }
  
  /**
   * edit
   *
   * @param  mixed $id
   * @return void
   */
  public function edit($id)
  {
    $data = $this->blogRepository->editBlog($id);

    return view('admin.blog.edit', ['result' => $data]);
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
        $file_name = $this->fileUploader->uploadFile($request, 'blog');
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

    return redirect()->route('admin.blog.index')->with('success', 'Edit Blog Successfully');
  }
}
