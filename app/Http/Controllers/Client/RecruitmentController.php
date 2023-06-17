<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\LanguageRepositoryInterface;
use App\Repositories\Interfaces\RecruitmentRepositoryInterface;

class RecruitmentController extends Controller
{    
    /**
     * recruitmentRepository
     *
     * @var mixed
     */
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
    
    /**
     * index
     *
     * @return void
     */
    public function index()
    { 
        $careers = $this->recruitmentRepository->getCarrers();
        
        return view('client.career', compact('careers'));    
    }
    
    /**
     * recruitmentDetails
     *
     * @param  mixed $id
     * @return void
     */
    public function detail($id)
    {
        $result = $this->recruitmentRepository->getInfoById($id);
        $careers = $this->recruitmentRepository->getCarrers();
        
        return view('client.career-detail', compact('careers', 'result'));
    }
}