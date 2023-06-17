<?php

namespace App\Http\Controllers\Client;

use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Http\Controllers\Controller;

class PostController extends Controller
{  
  /**
   * postRepository
   *
   * @var mixed
   */
  protected $postRepository;
    
  /**
   * __construct
   *
   * @param  mixed $postRepository
   * @return void
   */
  public function __construct(PostRepositoryInterface $postRepository) {
    $this->postRepository = $postRepository;
  }
  
  /**
   * index
   *
   * @param  mixed $type
   * @return void
   */
  public function index($type)
  {
    $post = $this->postRepository->getPost($type);
    $images = collect(json_decode($post->images))->chunk(3);

    return view('client.' . $type, compact('post', 'images'));
  }
}
