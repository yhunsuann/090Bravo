<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\ContactRepositoryInteface;
use App\Repositories\Interfaces\ConfigContactRepositoryInterface;

class ContactController extends Controller
{
    private $contactRepository;
    private $configContactRepository;

    public function __construct(
        ContactRepositoryInteface $contactRepository,
        ConfigContactRepositoryInterface $configContactRepository,
    ) {
        $this->contactRepository = $contactRepository;
        $this->configContactRepository = $configContactRepository;
    }

    public function index()
    {
        $value = $this->contactRepository->allContact();
  
        return view('contact.home',['result' => $value]);
    }

    public function searchData(Request $request)
    {
        if (!$request->filled('name') && !$request->filled('message') && !$request->filled('dateTo') && !$request->filled('dateFrom')) {
            return redirect()->route('contact.index');
        } else {
            $result = $this->contactRepository->allContact($request->all());
            
            return view('contact.home')->with('result', $result);
        }        
    }

    public function configContact(){
        $result = $this->configContactRepository->allConfigContact();
 
        return view('contact.config')->with('result', $result);
    }

    public function save(Request $request)
    {
        $this->configContactRepository->save($request->all());

        return redirect()->route('index_config')->with('success', 'Successful');
    }
}
