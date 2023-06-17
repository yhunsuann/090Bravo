<?php

namespace App\Http\Controllers\Client;

use App\Repositories\Interfaces\BlogRepositoryInterface;
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
   * __construct
   *
   * @param  mixed $blogRepository
   * @return void
   */
  public function __construct(BlogRepositoryInterface $blogRepository) {
      $this->blogRepository = $blogRepository;
  }
  
  /**
   * index
   *
   * @return void
   */
  public function index()
  {
    $blogs = $this->blogRepository->getBlogs();

    return view('client.article', compact('blogs'));
  }
  
  /**
   * blogDetails
   *
   * @param  mixed $id
   * @return void
   */
  public function detail($id)
  {
    $blog = $this->blogRepository->getInfoById($id);
    
    if (!empty($blog)) {
      return view('client.article-detail', compact('blog'));
    } abort(404);
  }
}
