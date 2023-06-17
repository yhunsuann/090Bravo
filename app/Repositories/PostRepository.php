<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Models\Post;
use App\Repositories\Interfaces\PostTranslateRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{    
    /**
     * model
     *
     * @var mixed
     */
    protected $model;
        
    /**
     * postTranslateRepository
     *
     * @var mixed
     */
    protected $postTranslateRepository;
    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct(Post $model, PostTranslateRepositoryInterface $postTranslateRepository) {
        $this->model = $model;
        $this->postTranslateRepository = $postTranslateRepository;
    }
    
    /**
     * allPost
     *
     * @param  mixed $type
     * @return void
     */
    public function allPost($type)
    {
        return $this->model->where('type', $type)
                            ->with('postTranslates', 'postTranslates.language')
                            ->get();
    }
    
    /**
     * getPost
     *
     * @param  mixed $type
     * @return void
     */
    public function getPost($type)
    {
        return $this->model
                ->join('post_translates', 'posts.id', 'post_translates.post_id')
                ->where('type', $type)
                ->where('language_code', app()->getLocale())
                ->first();
    }
    
    /**
     * updatePost
     *
     * @param  mixed $data
     * @param  mixed $type
     * @return void
     */
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
