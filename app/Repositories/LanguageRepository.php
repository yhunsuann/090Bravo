<?php

namespace App\Repositories;

use App\Repositories\Interfaces\LanguageRepositoryInterface;
use App\Models\Language;



class LanguageRepository implements LanguageRepositoryInterface
{
    protected $model;

    public function __construct(Language $model)
    {
        $this->model = $model;
    }

    public function listLanguageRecruitment()
    {
        return  $this->model->get();
    }
    
    public function listLanguageBlog()
    {
        return  $this->model->get();
    }
}    