<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RecruitmentController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PostController;
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

Route::get('login',[AuthController::class, 'login'])->name('login');
Route::post('login',[AuthController::class, 'loginProcess'])->name('login.process');

Route::group(['middleware' => 'check-login'], function() {
    Route::get('', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'recruitment', 'as' => 'recruitment.'], function () {
        Route::get('', [RecruitmentController::class, 'index'])->name('index');
        Route::get('create', [RecruitmentController::class, 'create'])->name('create'); 
        Route::post('create', [RecruitmentController::class, 'store'])->name('store');
        Route::get('delete/{id}', [RecruitmentController::class, 'delete'])->name('delete');
        Route::get('edit/{id}', [RecruitmentController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [RecruitmentController::class, 'update'])->name('update');
        Route::post('deletes', [RecruitmentController::class, 'deletes'])->name('deletes');
    });

    Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
        Route::get('', [BlogController::class, 'index'])->name('index');
        Route::get('create', [BlogController::class, 'create'])->name('create');
        Route::post('create', [BlogController::class, 'store'])->name('store');
        Route::post('deletes', [BlogController::class, 'deletes'])->name('deletes');
        Route::get('delete/{id}', [BlogController::class, 'delete'])->name('delete');
        Route::get('edit/{id}', [BlogController::class, 'edit'])->name('edit');
        Route::post('edit/{id}', [BlogController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
        Route::get('{type}', [PostController::class, 'index'])->name('office');
        Route::post('update/{type}',[PostController::class, 'updatePost'])->name('update');
    });

    Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
        Route::get('',[ContactController::class, 'index'])->name('index');
        Route::get('delete/{id}',[ContactController::class, 'delete'])->name('delete');
        Route::get('config',[ContactController::class, 'configContact'])->name('config');
        Route::get('search', [ContactController::class, 'searchData'])->name('search');
        Route::post('config/save', [ContactController::class, 'save'])->name('save');
    });

    Route::group(['prefix' => 'config', 'as' => 'config.'], function () {
        Route::get('',[ContactController::class, 'config'])->name('index');
        Route::post('', [ContactController::class, 'configProcess'])->name('config.process');
    });
});
