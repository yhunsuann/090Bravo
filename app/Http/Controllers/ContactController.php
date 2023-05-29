<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\ContactRepositoryInteface;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(ContactRepositoryInteface $contactRepository, 
    ) {
        $this->contactRepository = $contactRepository;
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
            
            return view('contact.home')->with('result',$result);
        }        
    }

}
