<?php

namespace App\Http\Controllers\client;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
  protected $postRepository;
  
  public function __construct(PostRepositoryInterface $postRepository) {
    $this->postRepository = $postRepository;
  }

  public function index($type)
  {
    $value = $this->postRepository->allPost($type);
    return view('client.post.'.$type,['result' => $value]);
  }
}
