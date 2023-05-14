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
Route::post('/login',[MemberController::class,'login']);

Route::group(['middleware' => 'CheckLogin'], function() {
    Route::get('/home',[MemberController::class,'index'])->name('index');
    Route::post('/add-recruitment',[RecruitController::class,'add_recruitment']);
    Route::get('/delete/{id}',[RecruitController::class,'delete_recruitment']);
    Route::get('/edit/{id}',[RecruitController::class,'edit_recruitment']);
    Route::post('update-recruitment/{id}',[RecruitController::class,'update_recruitment']);
    Route::get('/log-out', [MemberController::class, 'log_out']);
    Route::get('/search', [RecruitController::class, 'search_data']);
    Route::post('/delete-select', [RecruitController::class, 'delete_select']);
});
Route::get('/forgot-password', function () {
    return view('admin.forgot-password');
});
Route::post('/recover-pass', [MemberController::class,'recover_pass']);
Route::get('/reset-new-pass', function () {
    return view('admin.reset_new_pass');  
});
Route::post('/update-new-pass', [MemberController::class,'update_new_pass']);