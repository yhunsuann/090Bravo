<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\ContactRepositoryInteface;
use App\Repositories\Interfaces\ConfigContactRepositoryInterface;
use App\Repositories\Interfaces\LanguageRepositoryInterface;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{    
    /**
     * contactRepository
     *
     * @var mixed
     */
    protected $contactRepository;
        
    /**
     * configContactRepository
     *
     * @var mixed
     */
    protected $configContactRepository;

    /**
     * languageRepository
     *
     * @var mixed
     */
    protected $languageRepository;
    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        ContactRepositoryInteface $contactRepository,
        ConfigContactRepositoryInterface $configContactRepository,
        LanguageRepositoryInterface $languageRepository
    ) {
        $this->contactRepository = $contactRepository;
        $this->configContactRepository = $configContactRepository;
        $this->languageRepository = $languageRepository;
    }
    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $value = $this->contactRepository->allContact();
  
        return view('admin.contact.home',['result' => $value]);
    }
    
    /**
     * searchData
     *
     * @param  mixed $request
     * @return void
     */
    public function searchData(Request $request)
    {
        if (!$request->filled('name') && !$request->filled('message') && !$request->filled('dateTo') && !$request->filled('dateFrom')) {
            return redirect()->route('admin.contact.index');
        } else {
            $result = $this->contactRepository->allContact($request->all());
            
            return view('admin.contact.home')->with('result', $result);
        }        
    }
    
    /**
     * configContact
     *
     * @return void
     */
    public function config(){
        $result = $this->configContactRepository->allConfigContact();
        $languages = $this->languageRepository->listLanguageRecruitment();

        return view('admin.contact.config')
                    ->withResult($result)
                    ->withLanguages($languages);
    }
    
    /**
     * save
     *
     * @param  mixed $request
     * @return void
     */
    public function configProcess(Request $request)
    {   
        $params = $request->except('_token');
        foreach ($params as $key => $value) {
            $this->configContactRepository->save($key, $value);
        }

        return redirect()->route('admin.config.index')->with('success', 'Successfully');
    }
}
