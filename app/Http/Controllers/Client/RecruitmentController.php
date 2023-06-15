<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\LanguageRepositoryInterface;
use App\Repositories\Interfaces\RecruitmentRepositoryInterface;


class RecruitmentController extends Controller
{
    protected $recruitmentRepository;    
    /**
     * languageRepository
     *
     * @var mixed
     */
    protected $languageRepository; 

    /**
     * fileUploader
     *
     * @var mixed
     */
    protected $fileUploader;
    
    /**
     * __construct
     *
     * @param  mixed $recruitmentRepository
     * @return void
     */
    public function __construct(RecruitmentRepositoryInterface $recruitmentRepository)
    {
        $this->recruitmentRepository = $recruitmentRepository;
    }

    public function index()
    { 
        $value = $this->recruitmentRepository->allRecruitments();
  
        return view('client.recruitment.home', ['result' => $value]);    
    }

    public function recruitmentDetails($id)
    {
        $data = $this->recruitmentRepository->editCruitments($id);
        $value = $this->recruitmentRepository->allRecruitments();
    
        return view('client.recruitment.detail', ['result' => $data , 'recruitment' => $value,'allrecruitment' =>$value]);
    }
}