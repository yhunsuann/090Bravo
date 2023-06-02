<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\RecruitController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\client\RecruitmentController;
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

Route::get('/admin', function () {
    return view('admin.welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::post('/login',[UserController::class,'logIn']);
        Route::get('/forgot-password', function () {
            return view('admin.recruitment.forgot-password');
        });
        Route::post('/recover-pass', [UserController::class,'recoverPass']);
        Route::get('/reset-new-pass', function () {
            return view('admin.recruitment.reset_new_pass');  
        });
        Route::post('/update-new-pass', [UserController::class,'updateNewPass']);
    }); 
}); 

Route::group(['middleware' => 'CheckLogin'], function() {
    Route::get('/user/log-out', [UserController::class, 'logOut']);

    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'recruitment'], function () {
            Route::get('/',[RecruitController::class,'index'])->name('index');
            Route::post('/add',[RecruitController::class,'addRecruitment']);
            Route::get('/delete/{id}',[RecruitController::class,'deleteRecruitment']);
            Route::get('/edit/{id}',[RecruitController::class,'editRecruitment']);
            Route::post('/update/{id}',[RecruitController::class,'updateRecruitment']);
            Route::get('/create', [RecruitController::class, 'createRecruitment']); 
            Route::post('/delete-select', [RecruitController::class, 'deleteSelect']);
            Route::get('/search', [RecruitController::class, 'searchData']);
        });

        Route::group(['prefix' => 'blog'], function () {
            Route::get('/',[BlogController::class,'index'])->name('index_blog');
            Route::get('/create',[BlogController::class, 'createBlog']);
            Route::post('/add',[BlogController::class,'addBlog']);
            Route::get('/search',[BlogController::class, 'searchData']);
            Route::post('/delete-select', [BlogController::class, 'deleteSelect']);
            Route::get('/delete/{id}',[BlogController::class,'deleteBlog']);
            Route::get('/edit/{id}',[BlogController::class,'editBlog']);
            Route::post('/update/{id}',[BlogController::class,'updateBlog']);
        });

        Route::group(['prefix' => 'post'], function () {
            Route::get('/{type}',[PostController::class,'index'])->name('index_office');
            Route::get('/{type}',[PostController::class,'index'])->name('index_member');
            Route::post('/update/{type}',[PostController::class,'updatePost'])->name('index_member');
        });

        Route::group(['prefix' => 'contact'], function () {
        Route::get('/',[ContactController::class, 'index'])->name('contact.index');
        Route::get('/config',[ContactController::class,'configContact'])->name('index_config');
        Route::get('/search', [ContactController::class, 'searchData']);
        Route::post('/config/save', [ContactController::class, 'save']);
        });
    }); 
});

Route::get('/recruitment',[RecruitmentController::class,'index']);
Route::get('/recruitment/detail/{id}',[RecruitmentController::class,'recruitmentDetails']);
