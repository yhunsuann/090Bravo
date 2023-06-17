<?php

use App\Http\Controllers\Client\RecruitmentController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\LangController;
use Illuminate\Support\Facades\Route;

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
    Route::get('language/{lang?}', [LangController::class,'change_language'])->name('user.change-language');
    
    Route::get('', [HomeController::class, 'index'])->name('index');

    Route::group(['prefix' => 'about-us'], function () {
        Route::get('', [HomeController::class,'aboutUs'])->name('about');
        Route::get('{type}', [PostController::class,'index'])->name('about-us');
    });
    
    Route::group(['prefix' => 'career', 'as' => 'career.'], function () {
        Route::get('', [RecruitmentController::class, 'index'])->name('index');
        Route::get('{id}', [RecruitmentController::class, 'detail'])->name('detail');
    });

    Route::group(['prefix' => 'article', 'as' => 'article.'], function () {
        Route::get('', [BlogController::class,'index'])->name('index');
        Route::get('{id}', [BlogController::class,'detail'])->name('detail');
    });
    
    Route::group(['prefix' => 'contact-us'], function () {
        Route::get('', [ContactController::class,'index'])->name('index_contact');
        Route::post('', [ContactController::class,'submitContact'])->name('contact.submit');
    });
});