<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Models\Post;
use App\Repositories\Interfaces\PostTranslateRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    protected $model;
    protected $postTranslateRepository;
    public function __construct(Post $model, PostTranslateRepositoryInterface $postTranslateRepository)
    {
        $this->model = $model;
        $this->postTranslateRepository = $postTranslateRepository;
    }
    public function allPost($type)
    {
        $posts = $this->model->where('type', $type)
                             ->with('postTranslates', 'postTranslates.language')
                             ->get();

        return $posts;
    }
    public function updatePost($data, $type)
    {
        $blogValue = [];
        if($data['images']){
            $blogValue['images'] = $data['images'];
        }
        if(!empty($blogValue)){
            $this->model->Where('type', $type)->update($blogValue);
        }
        $id = $this->model->where('type', $type)->value('id');
        $qty = count($data['language_code']);
        for($i = 0; $i < $qty; $i++){
            $postTranslateValue[$i] = [
                'title' => $data['title'][$i],
                'content' => $data['content'][$i],
                'description' => $data['description'][$i]
            ];
            $this->postTranslateRepository
            ->updatePostTranslate($id, $data['language_code'][$i], $postTranslateValue[$i]);
        } 
    }
  
}    