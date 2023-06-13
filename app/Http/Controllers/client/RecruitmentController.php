<?php

namespace App\Http\Controllers\client;
use App\Repositories\Interfaces\RecruitmentRepositoryInterface;
use App\Repositories\Interfaces\LanguageRepositoryInterface;
use App\Http\Controllers\Controller;

class RecruitmentController extends Controller
{
    private $recruitmentRepository;
    private $languageRepository;
    protected $fileUploader;

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