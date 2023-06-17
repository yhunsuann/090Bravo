<?php

namespace App\Repositories;

use App\Repositories\Interfaces\RecruitmentRepositoryInterface;
use App\Repositories\Interfaces\RecruitmentTranslateRepositoryInterface;
use App\Models\Recruitment;
use App\Models\RecruitmentTranslate;
class RecruitmentRepository implements RecruitmentRepositoryInterface
{    
    /**
     * model
     *
     * @var mixed
     */
    protected $model;
        
    /**
     * recruitmentTranslateRepository
     *
     * @var mixed
     */
    protected $recruitmentTranslateRepository;
    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        Recruitment $model,  
        RecruitmentTranslateRepositoryInterface $recruitmentTranslateRepository
    ) {
        $this->model = $model;
        $this->recruitmentTranslateRepository = $recruitmentTranslateRepository;
    }
        
    /**
     * allRecruitments
     *
     * @param  mixed $data
     * @return void
     */
    public function allRecruitments($data = [])
    {
        $status = $data['status'] ?? null;
        $keyword = $data['keyword'] ?? null;
        $dateFrom = $data['dateFrom'] ?? null;
        $dateTo = $data['dateTo'] ?? null;
    
        return $this->model
                    ->with(['recruitment_default'])
                    ->whereHas('recruitmentTranslates', function ($query) use ($keyword) {
                        $query->when(!empty($keyword), function ($q) use ($keyword) {
                            $q->where('title', 'like', '%' . $keyword . '%');
                        });
                    })
                    ->when(!empty($status), function ($query) use ($status) {
                        $query->where('status', $status);
                    })
                    ->when(!empty($dateFrom), function ($query) use ($dateFrom) {
                        $query->whereDate('created_at', '>=', $dateFrom);
                    })
                    ->when(!empty($dateTo), function ($query) use ($dateTo) {
                        $query->whereDate('created_at', '<=', $dateTo);
                    })
                    ->paginate();
    }

    /**
     * allBlog
     *
     * @param  mixed $data
     * @return void
     */
    public function getCarrers($data = [])
    {
        return $this->model
                ->select([
                    'recruitments.*',
                    'title',
                    'description',
                    'content'
                ])
                ->join('recruitment_translates', 'recruitments.id', 'recruitment_translates.recruitment_id')
                ->where('status', 'active')
                ->where('language_code', app()->getLocale())
                ->get();
    }

    /**
     * allBlog
     *
     * @param  mixed $data
     * @return void
     */
    public function getInfoById(int $id)
    {
        return $this->model
                ->select([
                    'recruitments.*',
                    'title',
                    'description',
                    'content'
                ])
                ->join('recruitment_translates', 'recruitments.id', 'recruitment_translates.recruitment_id')
                ->where('recruitments.id', $id) 
                ->where('status', 'active')
                ->where('language_code', app()->getLocale())
                ->first();
    }
    
    /**
     * addRecruitments
     *
     * @param  mixed $data
     * @return void
     */
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
        
    /**
     * updateCruitments
     *
     * @param  mixed $data
     * @param  mixed $id
     * @return void
     */
    public function updateCruitments($data, $id)
    {
        $recruitmentValue = [
            'status' => $data['status']
        ];

        if ($data['image']) {
            $recruitmentValue['image'] = $data['image'];
        }

        $this->model->Where('id', $id)->update($recruitmentValue);
        $qty = $data['count'];

        for ($i = 0; $i < $qty; $i++) {
            $recruitmentTranslateValue[$i] = [
                'title' => $data['title'][$i],
                'content' => $data['content'][$i],
                'description' => $data['description'][$i]
            ];

            $this->recruitmentTranslateRepository
                ->updateRecruitmentTranslate($id, $data['language_code'][$i], $recruitmentTranslateValue[$i]);
        } 
    }
    
    /**
     * deleteCruitments
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteCruitments($id)
    {
        $recruitments = $this->model->find($id);
        $recruitments->delete();
    }
       
    /**
     * editCruitments
     *
     * @param  mixed $id
     * @return void
     */
    public function editCruitments($id)
    {
        $recruitment = $this->model->find($id);
        $recruitment->load(['recruitmentTranslates']);
        
        return $recruitment;
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
}
