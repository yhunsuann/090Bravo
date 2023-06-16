<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BlogRepositoryInterface;
use App\Models\Blog;
use App\Repositories\Interfaces\BlogTranslateRepositoryInterface;

class BlogRepository implements BlogRepositoryInterface
{    
    /**
     * model
     *
     * @var mixed
     */
    protected $model;
        
    /**
     * blogTranslateRepository
     *
     * @var mixed
     */
    protected $blogTranslateRepository;
    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct(Blog $model, BlogTranslateRepositoryInterface $blogTranslateRepository) {
        $this->model = $model;
        $this->blogTranslateRepository = $blogTranslateRepository;
    }
       
    /**
     * allBlog
     *
     * @param  mixed $data
     * @return void
     */
    public function allBlog($data = [])
    {
        $status = $data['status'] ?? null;
        $keyword = $data['keyword'] ?? null;
 
        return $this->model->with(['blog_default'])
                            ->whereHas('blogTranslates', function ($query) use ($keyword) {
                                $query->when(!empty($keyword), function ($query) use ($keyword) {
                                    $query->where('title', 'like', '%' . $keyword . '%');
                                });
                            })
                            ->when(!empty($status), function ($query) use ($status) {
                                $query->where('status', $status);
                            })
                            ->paginate();
    }
    
    /**
     * addBlog
     *
     * @param  mixed $data
     * @return void
     */
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
    
    /**
     * deleteMutipleBaseIds
     *
     * @param  mixed $ids
     * @return void
     */
    public function deleteMutipleBaseIds($ids)
    {
        return $this->model->destroy($ids);  
    } 
    
    /**
     * deleteBlog
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteBlog($id)
    {
        $blog = $this->model->find($id);
        $blog->delete();
    } 
    
    /**
     * editBlog
     *
     * @param  mixed $id
     * @return void
     */
    public function editBlog($id)
    {
        $blog = $this->model->find($id);
        return $blog->load(['blogTranslates']);
    }
    
    /**
     * updateBlog
     *
     * @param  mixed $data
     * @param  mixed $id
     * @return void
     */
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