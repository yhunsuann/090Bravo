<?php

use App\Http\Controllers\Client\RecruitmentController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\LangController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'Language'], function() {
    Route::get('language/{lang?}',[LangController::class,'change_language'])->name('user.change-language');
    
    Route::get('/',function () {
        return view('client.home.home');
    })->name('index_home');
    Route::get('/about',function () {
        return view('client.home.about');
    })->name('about');
    
    Route::group(['prefix' => 'recruitment'], function () {
        Route::get('/',[RecruitmentController::class,'index'])->name('recruitment.index');
        Route::get('/detail/{id}',[RecruitmentController::class,'recruitmentDetails'])->name('recruitment.detail');
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/',[BlogController::class,'index'])->name('blog.index');
        Route::get('/detail/{id}',[BlogController::class,'blogDetails'])->name('blog.detail');
    });

    Route::get('/post/{type}',[PostController::class,'index'])->name('post');

    Route::group(['prefix' => 'contact'], function () {
        Route::get('/',[ContactController::class,'index'])->name('index_contact');
        Route::post('/submit',[ContactController::class,'submitContact'])->name('contact.submit');
    });
});