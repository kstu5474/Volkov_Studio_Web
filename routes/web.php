<?php

use App\Http\Controllers\RandNumCotroller;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//메인페이지
Route::get('/', function() {
    return view('/main/index');
});

//로그인페이지
Route::get('/login', function() {
    return view('/main/login');
});

//회원가입페이지
Route::get('/register', function() {
    return view('/main/register');
});

//아이디 중복확인
Route::post('/register/existid', [RegisterController::class, 'existsId']);

//이메일 중복확인
Route::post('/register/existemail', [RegisterController::class, 'existEmail']);

//추첨기
Route::get('/etc/roller', [RandNumCotroller::class, 'getGenerateNumber']);