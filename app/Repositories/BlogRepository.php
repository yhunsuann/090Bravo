<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BlogRepositoryInterface;
use App\Models\Blog;
use App\Repositories\Interfaces\BlogTranslateRepositoryInterface;

class BlogRepository implements BlogRepositoryInterface
{
    protected $model;
    protected $blogTranslateRepository;
    public function __construct(Blog $model, BlogTranslateRepositoryInterface $blogTranslateRepository)
    {
        $this->model = $model;
        $this->blogTranslateRepository = $blogTranslateRepository;
    }
   
    public function allBlog($data = [])
    {
        $status = $data['status'] ?? null;
        $keyword = $data['keyword'] ?? null;
 
        $recruitments = $this->model->whereHas('blogTranslates', function ($query) use ($keyword) {
                                            $query->where('title', 'like', '%' . $keyword . '%');
                                        })
                                        ->when($status, function ($query) use ($status) {
                                            $query->where('status', $status);
                                        })
                                        ->with(['blogTranslates' => function ($query) {
                                            $query->where('language_code', 'vi');
                                        }])
                                        ->paginate(5);
    
        return $recruitments;
    }
    public function addBlog($data){
        $BlogValue = [
            'image' => $data['image'],
            'status' => $data['status'],
        ];
        $recruitment = $this->model->create($BlogValue);
        $qty = $data['count'];
        for($i = 0; $i < $qty; $i++){
            $blogTranslateValue[] = [
                'blog_id' => $recruitment->id,
                'language_code' => $data['language_code'][$i],
                'title' => $data['title'][$i],
                'content' => $data['content'][$i],
                'description' => $data['description'][$i]
            ];
        } 

        $this->model->blogTranslates()->insert($blogTranslateValue);
    }
    public function deleteMutipleBaseIds($ids)
    {
        return $this->model->destroy($ids);  
    } 
    public function deleteBlog($id)
    {
        $blog = $this->model->find($id);
        $blog->delete();
    } 
    public function editBlog($id)
    {
        $blog = $this->model->find($id);
        $data = $blog->blogTranslates;
        return $data;
    }
    public function updateBlog($data, $id)
    {
        $blogValue = [
            'status' => $data['status']
        ];
        if($data['image']){
            $blogValue['image'] = $data['image'];
        }
        
        $this->model->Where('id', $id)->update($blogValue);
        $qty = $data['count'];
        for($i = 0; $i < $qty; $i++){
            $blogTranslateValue[$i] = [
                'title' => $data['title'][$i],
                'content' => $data['content'][$i],
                'description' => $data['description'][$i]
            ];
            $this->blogTranslateRepository
            ->updateBlogTranslate($id, $data['language_code'][$i], $blogTranslateValue[$i]);
        } 
    }
}    