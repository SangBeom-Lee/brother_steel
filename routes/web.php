<?php

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

//메인
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])
    ->name('main');

//서브페이지
Route::get('/page/{pageName}', [App\Http\Controllers\SubpageController::class, 'index'])
    ->name('page');

//문의하기
Route::get('/contact/regst', [App\Http\Controllers\ContactController::class, 'regist'])
    ->name('contact');

//게시판
Route::get('/board/{boardid}', [App\Http\Controllers\BoardController::class, 'index'])
    ->name('board');