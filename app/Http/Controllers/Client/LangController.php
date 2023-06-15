<?php

namespace App\Http\Controllers\client;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
class LangController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function change_language($langcode){
        {
            App::setLocale($langcode);
            session()->put('lang_code',$langcode);
            return redirect()->back();
        }
    }
}
    