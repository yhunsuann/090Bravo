<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\RecruitController;
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

Route::get('/create', function () {
    return view('admin.create');
});
Route::post('/login',[MemberController::class,'logIn']);

Route::group(['middleware' => 'CheckLogin'], function() {
    Route::get('/home',[MemberController::class,'index'])->name('index');
    Route::post('/add-recruitment',[RecruitController::class,'addRecruitment']);
    Route::get('/delete/{id}',[RecruitController::class,'deleteRecruitment']);
    Route::get('/edit/{id}',[RecruitController::class,'editRecruitment']);
    Route::post('update-recruitment/{id}',[RecruitController::class,'updateRecruitment']);
    Route::get('/log-out', [MemberController::class, 'logOut']);
    Route::get('/search', [RecruitController::class, 'searchData']);
    Route::post('/delete-select', [RecruitController::class, 'deleteSelect']);
});
Route::get('/forgot-password', function () {
    return view('admin.forgot-password');
});
Route::post('/recover-pass', [MemberController::class,'recoverPass']);
Route::get('/reset-new-pass', function () {
    return view('admin.reset_new_pass');  
});
Route::post('/update-new-pass', [MemberController::class,'updateNewPass']);