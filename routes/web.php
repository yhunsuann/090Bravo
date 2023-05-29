<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RecruitController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::post('/login',[UserController::class,'logIn']);

Route::group(['middleware' => 'CheckLogin'], function() {
    Route::get('/home',[UserController::class,'index'])->name('index');
    Route::post('/add-recruitment',[RecruitController::class,'addRecruitment']);
    Route::get('/delete/{id}',[RecruitController::class,'deleteRecruitment']);
    Route::get('/edit/{id}',[RecruitController::class,'editRecruitment']);
    Route::post('update-recruitment/{id}',[RecruitController::class,'updateRecruitment']);
    Route::get('/log-out', [UserController::class, 'logOut']);
    Route::get('/search', [RecruitController::class, 'searchData']);
    Route::post('/delete-select', [RecruitController::class, 'deleteSelect']);
    Route::get('/create', [RecruitController::class, 'createRecruitment']);  

    Route::get('/blog',[BlogController::class,'index'])->name('index_blog');
    Route::get('/blog/create',[BlogController::class, 'createBlog']);
    Route::post('/add-blog',[BlogController::class,'addBlog']);
    Route::get('blog/search',[BlogController::class, 'searchData']);
    Route::post('/blog/delete-select', [BlogController::class, 'deleteSelect']);
    Route::get('/blog/delete/{id}',[BlogController::class,'deleteBlog']);
    Route::get('/blog/edit/{id}',[BlogController::class,'editBlog']);
    Route::post('/blog/update/{id}',[BlogController::class,'updateBlog']);

    Route::get('/post/{type}',[PostController::class,'index'])->name('index_office');
    Route::get('/post/{type}',[PostController::class,'index'])->name('index_member');
    Route::post('/post/update/{type}',[PostController::class,'updatePost'])->name('index_member');
});
Route::get('/forgot-password', function () {
    return view('admin.forgot-password');
});
Route::post('/recover-pass', [UserController::class,'recoverPass']);
Route::get('/reset-new-pass', function () {
    return view('admin.reset_new_pass');  
});
Route::post('/update-new-pass', [UserController::class,'updateNewPass']);