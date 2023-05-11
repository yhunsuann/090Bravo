<?php

use App\Http\Controllers\memberController;
use App\Http\Controllers\recruitController;
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
Route::post('/login',[memberController::class,'login']);

Route::group(['middleware' => 'CheckLogin'], function() {
    Route::get('/home',[memberController::class,'index'])->name('index');
    Route::post('/add-recruitment',[recruitController::class,'add_recruitment']);
    Route::get('/delete/{id}',[recruitController::class,'delete_recruitment']);
    Route::get('/edit/{id}',[recruitController::class,'edit_recruitment']);
    Route::post('update-recruitment/{id}',[recruitController::class,'update_recruitment']);
    Route::get('/log-out', [memberController::class, 'log_out']);
    Route::get('/search', [recruitController::class, 'search_data']);
    Route::post('/delete-select', [recruitController::class, 'delete_select']);
});
Route::get('/forgot-password', function () {
    return view('admin.forgot-password');
});
Route::post('/recover-pass', [memberController::class,'recover_pass']);
Route::get('/reset-new-pass', function () {
    return view('admin.reset_new_pass');  
});
Route::post('/update-new-pass', [memberController::class,'update_new_pass']);