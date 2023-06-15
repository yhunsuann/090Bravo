<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RecruitmentController;
use App\Http\Controllers\Admin\BlogAdminController;
use App\Http\Controllers\Admin\ContactAdminController;
use App\Http\Controllers\Admin\PostAdminController;
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
        Route::get('', [BlogAdminController::class, 'index'])->name('index');
        Route::get('create', [BlogAdminController::class, 'createBlog'])->name('create');
        Route::post('add', [BlogAdminController::class, 'addBlog'])->name('add');
        Route::get('search', [BlogAdminController::class, 'searchData'])->name('search');
        Route::post('delete-select', [BlogAdminController::class, 'deleteSelect'])->name('delete-select');
        Route::get('delete/{id}', [BlogAdminController::class, 'deleteBlog'])->name('delete');
        Route::get('edit/{id}', [BlogAdminController::class, 'editBlog'])->name('edit');
        Route::post('update/{id}', [BlogAdminController::class, 'updateBlog'])->name('update');
    });

    Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
        Route::get('{type}', [PostAdminController::class, 'index'])->name('office');
        Route::post('update/{type}',[PostAdminController::class, 'updatePost'])->name('update');
    });

    Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
        Route::get('',[ContactAdminController::class, 'index'])->name('index');
        Route::get('config',[ContactAdminController::class, 'configContact'])->name('config');
        Route::get('search', [ContactAdminController::class, 'searchData'])->name('search');
        Route::post('config/save', [ContactAdminController::class, 'save'])->name('save');
    });

    Route::group(['prefix' => 'config', 'as' => 'config.'], function () {
        Route::get('',[ContactAdminController::class, 'config'])->name('index');
        Route::post('', [ContactAdminController::class, 'configProcess'])->name('config.process');
    });
});
