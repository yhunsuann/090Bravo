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
use App\Http\Controllers\client\LangController;
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
        return redirect('/admin');  
    }
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::post('/login',[UserAdminController::class,'logIn'])->name('admin.user.login');
        Route::get('/forgot-password', function () {
            return view('admin.recruitment.forgot-password');
        })->name('admin.user.forgot-password');
        Route::post('/recover-pass', [UserAdminController::class,'recoverPass'])->name('admin.user.recover-pass');
        Route::get('/reset-new-pass', function () {
            return view('admin.recruitment.reset_new_pass');  
        })->name('admin.user.reset-new-pass');
        Route::post('/update-new-pass', [UserAdminController::class,'updateNewPass'])->name('admin.user.update-new-pass');
    }); 
}); 

Route::group(['middleware' => 'CheckLogin'], function() {
    Route::get('admin/user/log-out', [UserAdminController::class, 'logOut'])->name('admin.user.log-out');

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/',function () {
            return view('admin.home.home');  
        })->name('admin');
        Route::group(['prefix' => 'recruitment'], function () {
            Route::get('/',[RecruitmentAdminController::class,'index'])->name('index');
            Route::post('/add',[RecruitmentAdminController::class,'addRecruitment'])->name('admin.recruitment.add');
            Route::get('/delete/{id}',[RecruitmentAdminController::class,'deleteRecruitment'])->name('admin.recruitment.delete');
            Route::get('/edit/{id}',[RecruitmentAdminController::class,'editRecruitment'])->name('admin.recruitment.edit');
            Route::post('/update/{id}',[RecruitmentAdminController::class,'updateRecruitment'])->name('admin.recruitment.update');
            Route::get('/create', [RecruitmentAdminController::class, 'createRecruitment'])->name('admin.recruitment.create'); 
            Route::post('/delete-select', [RecruitmentAdminController::class, 'deleteSelect'])->name('admin.recruitment.delete-select');
            Route::get('/search', [RecruitmentAdminController::class, 'searchData'])->name('admin.recruitment.search');
        });

        Route::group(['prefix' => 'blog'], function () {
            Route::get('/',[BlogAdminController::class,'index'])->name('index_blog');
            Route::get('/create',[BlogAdminController::class, 'createBlog'])->name('admin.blog.create');
            Route::post('/add',[BlogAdminController::class,'addBlog'])->name('admin.blog.add');
            Route::get('/search',[BlogAdminController::class, 'searchData'])->name('admin.blog.search');
            Route::post('/delete-select', [BlogAdminController::class, 'deleteSelect'])->name('admin.blog.delete-select');
            Route::get('/delete/{id}',[BlogAdminController::class,'deleteBlog'])->name('admin.blog.delete');
            Route::get('/edit/{id}',[BlogAdminController::class,'editBlog'])->name('admin.blog.edit');
            Route::post('/update/{id}',[BlogAdminController::class,'updateBlog'])->name('admin.blog.update');
        });

        Route::group(['prefix' => 'post'], function () {
            Route::get('/{type}',[PostAdminController::class,'index'])->name('index_office');
            Route::get('/{type}',[PostAdminController::class,'index'])->name('index_member');
            Route::post('/update/{type}',[PostAdminController::class,'updatePost'])->name('admin.post.update');
        });

        Route::group(['prefix' => 'contact'], function () {
        Route::get('/',[ContactAdminController::class, 'index'])->name('contact.index');
        Route::get('/config',[ContactAdminController::class,'configContact'])->name('index_config');
        Route::get('/search', [ContactAdminController::class, 'searchData'])->name('admin.contact.search');
        Route::post('/config/save', [ContactAdminController::class, 'save'])->name('admin.contact.config.save');
        });
    }); 
});
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