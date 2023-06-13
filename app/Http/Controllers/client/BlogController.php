<?php

namespace App\Http\Controllers\client;
use App\Repositories\Interfaces\BlogRepositoryInterface;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
  protected $blogRepository;
  
  public function __construct(
    BlogRepositoryInterface $blogRepository, 
  ) {
      $this->blogRepository = $blogRepository;
  }

  public function index()
  {
    $value = $this->blogRepository->allBlog();
  
    return view('client.blog.home',['result' => $value]);
  }

  public function recruitmentDetails($id)
  {
      $data = $this->blogRepository->editBlog($id);
 
      return view('client.blog.detail', ['result' => $data]);
  }



}
