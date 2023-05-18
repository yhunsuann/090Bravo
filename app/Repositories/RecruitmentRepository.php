<?php

namespace App\Repositories;

use App\Repositories\Interfaces\RecruitmentRepositoryInterface;
use App\Repositories\Interfaces\RecruitmentTranslateRepositoryInterface;
use App\Models\Recruitment;
use App\Models\RecruitmentTranslate;
class RecruitmentRepository implements RecruitmentRepositoryInterface
{
    protected $model;
    protected $recruitmentTranslateRepository;
    public function __construct(Recruitment $model,  RecruitmentTranslateRepositoryInterface $recruitmentTranslateRepository)
    {
        $this->model = $model;
        $this->recruitmentTranslateRepository = $recruitmentTranslateRepository;
    }
    

    public function allRecruitments($data = [])
    {
        $status = $data['status'] ?? null;
        $keyword = $data['keyword'] ?? null;
        $dateFrom = $data['dateFrom'] ?? null;
        $dateTo = $data['dateTo'] ?? null;
    
        $recruitments =  $this->model->whereHas('recruitmentTranslates', function ($query) use ($keyword) {
                                            $query->when($keyword, function ($q) use ($keyword) {
                                                $q->where('title', 'like', '%' . $keyword . '%');
                                            });
                                        })
                                        ->when($status, function ($query) use ($status) {
                                            $query->where('status', $status);
                                        })
                                        ->when($dateFrom && $dateTo, function ($query) use ($dateFrom, $dateTo) {
                                            $query->whereBetween('created_at', [$dateFrom, $dateTo]);
                                        })
                                        ->with(['recruitmentTranslates' => function ($query) {
                                            $query->where('language_code', 'vi');
                                        }])
                                        ->paginate(5);
    
        return $recruitments;
    }

    public function addRecruitments($data)
    {
        $recruitmentValue = [
            'image' => $data['image'],
            'status' => $data['status'],
        ];
        $recruitment = $this->model->create($recruitmentValue);
        $qty = $data['count'];
        for($i = 0; $i < $qty; $i++){
            $recruitmentTranslateValue[] = [
                'recruitment_id' => $recruitment->id,
                'language_code' => $data['language_code'][$i],
                'title' => $data['title'][$i],
                'content' => $data['content'][$i],
                'description' => $data['description'][$i]
            ];
        } 

        $this->model->recruitmentTranslates()->insert($recruitmentTranslateValue);
    }
    
    public function updateCruitments($data, $id)
    {
        $recruitmentValue = [
            'status' => $data['status']
        ];
        if($data['image']){
            $recruitmentValue['image'] = $data['image'];
        }
        $this->model->Where('id', $id)->update($recruitmentValue);
        $qty = $data['count'];
        for($i = 0; $i < $qty; $i++){
            $recruitmentTranslateValue[$i] = [
                'title' => $data['title'][$i],
                'content' => $data['content'][$i],
                'description' => $data['description'][$i]
            ];
            $this->recruitmentTranslateRepository
            ->updateRecruitmentTranslate($id, $data['language_code'][$i], $recruitmentTranslateValue[$i]);
        } 
    }

    public function deleteCruitments($id)
    {
        $recruitments =  $this->model->find($id);
        $recruitments->delete();
    }
   
    public function editCruitments($id)
    {
        $recruitment = $this->model->find($id);
        $data = $recruitment->recruitmentTranslates;
        return $data;

    } 

    public function deleteMutipleBaseIds($ids)
    {
        return $this->model->destroy($ids);  
    }  
}