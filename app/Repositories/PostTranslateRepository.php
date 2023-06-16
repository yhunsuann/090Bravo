<?php

namespace App\Repositories;

use App\Models\PostTranslate;
use App\Repositories\Interfaces\PostTranslateRepositoryInterface;

class PostTranslateRepository implements PostTranslateRepositoryInterface
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
    public function __construct(PostTranslate $model)
    {
        $this->model = $model;
    }
        
    /**
     * updatePostTranslate
     *
     * @param  mixed $id
     * @param  mixed $languageCode
     * @param  mixed $data
     * @return void
     */
    public function updatePostTranslate($id, $languageCode, $data)
    {
        $this->model->where('post_id', $id)
            ->where('language_code', $languageCode)
            ->update($data);
    }
}    
