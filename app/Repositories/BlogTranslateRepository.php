<?php

namespace App\Repositories;

use App\Models\BlogTranslate;
use App\Repositories\Interfaces\BlogTranslateRepositoryInterface;

class BlogTranslateRepository implements BlogTranslateRepositoryInterface
{    
    /**
     * model
     *
     * @var mixed
     */
    protected $model;
        
    /**
     * __construct
     *
     * @param  mixed $model
     * @return void
     */
    public function __construct(BlogTranslate $model)
    {
        $this->model = $model;
    }
        
    /**
     * updateBlogTranslate
     *
     * @param  mixed $id
     * @param  mixed $languageCode
     * @param  mixed $data
     * @return void
     */
    public function updateBlogTranslate($id, $languageCode, $data)
    {
        $this->model->where('blog_id', $id)
            ->where('language_code', $languageCode)
            ->update($data);
    }
}    
