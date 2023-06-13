<?php

namespace App\Http\Controllers\client;
use App\Repositories\Interfaces\ConfigContactRepositoryInterface;
use App\Repositories\Interfaces\ContactRepositoryInteface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  protected $configContactRepository;
  protected $contactRepository;
  
  public function __construct(
    ConfigContactRepositoryInterface $configContactRepository, 
    ContactRepositoryInteface $contactRepository
  ) {
      $this->configContactRepository = $configContactRepository;
      $this->contactRepository = $contactRepository;
  }

  public function index()
  {
    $value = $this->configContactRepository->allConfigContact();
  
    return view('client.contact.home',['result' => $value]);
  }
  public function submitContact(Request $request)
  {
    $this->contactRepository->submitContact($request->all());
    return redirect()->route('index_contact');
  }
}
