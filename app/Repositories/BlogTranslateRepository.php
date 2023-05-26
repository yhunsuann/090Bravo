<?php

namespace App\Repositories;

use App\Models\BlogTranslate;
use App\Repositories\Interfaces\BlogTranslateRepositoryInterface;

class BlogTranslateRepository implements BlogTranslateRepositoryInterface
{
    protected $model;
    
    public function __construct(BlogTranslate $model)
    {
        $this->model = $model;
    }
    
    public function updateBlogTranslate($id, $languageCode, $data)
    {
        BlogTranslate::where('blog_id', $id)
            ->where('language_code', $languageCode)
            ->update($data);
    }
}    