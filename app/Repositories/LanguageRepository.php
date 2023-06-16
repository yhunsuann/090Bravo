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
    
    /**
     * listLanguageRecruitment
     *
     * @return void
     */
    public function listLanguageRecruitment()
    {
        return  $this->model->get();
    }
        
    /**
     * listLanguageBlog
     *
     * @return void
     */
    public function listLanguageBlog()
    {
        return  $this->model->get();
    }
}    
