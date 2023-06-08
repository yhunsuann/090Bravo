<?php

use App\Http\Controllers\admin\UserAdminController;
use App\Http\Controllers\admin\RecruitmentAdminController;
use App\Http\Controllers\admin\BlogAdminController;
use App\Http\Controllers\admin\ContactAdminController;
use App\Http\Controllers\admin\PostAdminController;

use App\Http\Controllers\client\RecruitmentController;
use App\Http\Controllers\client\BlogController;
use App\Http\Controllers\client\PostController;
use App\Http\Controllers\client\ContactController;
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

Route::get('/admin/login', function () {
    if (Auth::guest()) {
        return view('admin.welcome');
    }else{
        return redirect()->route('index');  
    }
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::post('/login',[UserAdminController::class,'logIn']);
        Route::get('/forgot-password', function () {
            return view('admin.recruitment.forgot-password');
        });
        Route::post('/recover-pass', [UserAdminController::class,'recoverPass']);
        Route::get('/reset-new-pass', function () {
            return view('admin.recruitment.reset_new_pass');  
        });
        Route::post('/update-new-pass', [UserAdminController::class,'updateNewPass']);
    }); 
}); 

Route::group(['middleware' => 'CheckLogin'], function() {
    Route::get('admin/user/log-out', [UserAdminController::class, 'logOut']);

    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'recruitment'], function () {
            Route::get('/',[RecruitmentAdminController::class,'index'])->name('index');
            Route::post('/add',[RecruitmentAdminController::class,'addRecruitment']);
            Route::get('/delete/{id}',[RecruitmentAdminController::class,'deleteRecruitment']);
            Route::get('/edit/{id}',[RecruitmentAdminController::class,'editRecruitment']);
            Route::post('/update/{id}',[RecruitmentAdminController::class,'updateRecruitment']);
            Route::get('/create', [RecruitmentAdminController::class, 'createRecruitment']); 
            Route::post('/delete-select', [RecruitmentAdminController::class, 'deleteSelect']);
            Route::get('/search', [RecruitmentAdminController::class, 'searchData']);
        });

        Route::group(['prefix' => 'blog'], function () {
            Route::get('/',[BlogAdminController::class,'index'])->name('index_blog');
            Route::get('/create',[BlogAdminController::class, 'createBlog']);
            Route::post('/add',[BlogAdminController::class,'addBlog']);
            Route::get('/search',[BlogAdminController::class, 'searchData']);
            Route::post('/delete-select', [BlogAdminController::class, 'deleteSelect']);
            Route::get('/delete/{id}',[BlogAdminController::class,'deleteBlog']);
            Route::get('/edit/{id}',[BlogAdminController::class,'editBlog']);
            Route::post('/update/{id}',[BlogAdminController::class,'updateBlog']);
        });

        Route::group(['prefix' => 'post'], function () {
            Route::get('/{type}',[PostAdminController::class,'index'])->name('index_office');
            Route::get('/{type}',[PostAdminController::class,'index'])->name('index_member');
            Route::post('/update/{type}',[PostAdminController::class,'updatePost'])->name('index_member');
        });

        Route::group(['prefix' => 'contact'], function () {
        Route::get('/',[ContactAdminController::class, 'index'])->name('contact.index');
        Route::get('/config',[ContactAdminController::class,'configContact'])->name('index_config');
        Route::get('/search', [ContactAdminController::class, 'searchData']);
        Route::post('/config/save', [ContactAdminController::class, 'save']);
        });
    }); 
});
Route::get('/',[RecruitmentController::class,'index']);

Route::group(['prefix' => 'recruitment'], function () {
    Route::get('/detail/{id}',[RecruitmentController::class,'recruitmentDetails']);
});

Route::group(['prefix' => 'blog'], function () {
    Route::get('/',[BlogController::class,'index']);
    Route::get('/detail/{id}',[BlogController::class,'recruitmentDetails']);
});

Route::get('/post/{type}',[PostController::class,'index']);

Route::group(['prefix' => 'contact'], function () {
    Route::get('/',[ContactController::class,'index'])->name('index_contact');
    Route::post('/submit',[ContactController::class,'submitContact']);
});