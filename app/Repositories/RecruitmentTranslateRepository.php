<?php

namespace App\Repositories;

use App\Models\RecruitmentTranslate;
use App\Repositories\Interfaces\RecruitmentTranslateRepositoryInterface;

class RecruitmentTranslateRepository implements RecruitmentTranslateRepositoryInterface
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
    public function __construct(RecruitmentTranslate $model)
    {
        $this->model = $model;
    }
        
    /**
     * updateRecruitmentTranslate
     *
     * @param  mixed $id
     * @param  mixed $languageCode
     * @param  mixed $data
     * @return void
     */
    public function updateRecruitmentTranslate($id, $languageCode, $data)
    {
        $this->model->where('recruitment_id', $id)
            ->where('language_code', $languageCode)
            ->update($data);
    }
}    
