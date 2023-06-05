<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\ContactRepositoryInteface;
use App\Repositories\Interfaces\ConfigContactRepositoryInterface;
use App\Http\Controllers\Controller;
class ContactAdminController extends Controller
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
  
        return view('admin.contact.home',['result' => $value]);
    }

    public function searchData(Request $request)
    {
        if (!$request->filled('name') && !$request->filled('message') && !$request->filled('dateTo') && !$request->filled('dateFrom')) {
            return redirect()->route('contact.index');
        } else {
            $result = $this->contactRepository->allContact($request->all());
            
            return view('admin.contact.home')->with('result', $result);
        }        
    }

    public function configContact(){
        $result = $this->configContactRepository->allConfigContact();
 
        return view('admin.contact.config')->with('result', $result);
    }

    public function save(Request $request)
    {
        $this->configContactRepository->save($request->all());

        return redirect()->route('index_config')->with('success', 'Successful');
    }
}
