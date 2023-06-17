<?php

namespace App\Http\Controllers\Client;

use App\Repositories\Interfaces\ConfigContactRepositoryInterface;
use App\Repositories\Interfaces\ContactRepositoryInteface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{  
  /**
   * configContactRepository
   *
   * @var mixed
   */
  protected $configContactRepository;
    
  /**
   * contactRepository
   *
   * @var mixed
   */
  protected $contactRepository;
    
  /**
   * __construct
   *
   * @return void
   */
  public function __construct(
    ConfigContactRepositoryInterface $configContactRepository, 
    ContactRepositoryInteface $contactRepository
  ) {
      $this->configContactRepository = $configContactRepository;
      $this->contactRepository = $contactRepository;
  }
  
  /**
   * index
   *
   * @return void
   */
  public function index()
  {
    $value = $this->configContactRepository->allConfigContact();
  
    return view('client.contact-us',['result' => $value]);
  }
    
  /**
   * submitContact
   *
   * @param  mixed $request
   * @return void
   */
  public function submitContact(Request $request)
  {
    $this->contactRepository->submitContact($request->all());
    return response()->json(['status' => true, 'message' => __('message.contact_success')]);
  }
}
