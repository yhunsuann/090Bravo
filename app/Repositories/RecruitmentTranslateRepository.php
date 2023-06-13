<?php

namespace App\Repositories;

use App\Models\RecruitmentTranslate;
use App\Repositories\Interfaces\RecruitmentTranslateRepositoryInterface;

class RecruitmentTranslateRepository implements RecruitmentTranslateRepositoryInterface
{
    protected $model;
    
    public function __construct(RecruitmentTranslate $model)
    {
        $this->model = $model;
    }
    
    public function updateRecruitmentTranslate($id, $languageCode, $data)
    {
        $this->model->where('recruitment_id', $id)
            ->where('language_code', $languageCode)
            ->update($data);
    }
}    