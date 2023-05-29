<?php

namespace App\Repositories;

use App\Models\PostTranslate;
use App\Repositories\Interfaces\PostTranslateRepositoryInterface;

class PostTranslateRepository implements PostTranslateRepositoryInterface
{
    protected $model;

    public function __construct(PostTranslate $model)
    {
        $this->model = $model;
    }
    
    public function updatePostTranslate($id, $languageCode, $data)
    {
        $this->model->where('post_id', $id)
            ->where('language_code', $languageCode)
            ->update($data);
    }
}    