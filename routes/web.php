<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ChatController;


use App\Http\Controllers\ar\UserControllerar;
use App\Http\Controllers\ar\ShopControllerar;
use App\Http\Controllers\ar\IndexControllerar;
use App\Http\Controllers\ar\ChatControllerar;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/gallery',[IndexController::class, 'gallery']);

Route::get('/quiz',[IndexController::class, 'quiz']);
Route::get('/login',[UserController::class, 'login']);
Route::post('/login_response',[UserController::class, 'login_response']);

Route::get('/register',[UserController::class, 'register']);
Route::get('/register-designer',[UserController::class, 'registerDesigner']);

Route::post('/register_user',[UserController::class, 'register_user']);

Route::get('/shop',[ShopController::class, 'index']);
Route::get('/product',[ShopController::class, 'product']);

Route::get('/chat',[ChatController::class, 'index']);
Route::post('/add-message',[ChatController::class, 'addMessage']);



/////////////////
Route::get('ar/', [IndexControllerar::class, 'index']);
Route::get('ar/gallery',[IndexControllerar::class, 'gallery']);

Route::get('ar/quiz',[IndexControllerar::class, 'quiz']);
Route::get('ar/login',[UserControllerar::class, 'login']);
Route::post('ar/login_response',[UserControllerar::class, 'login_response']);

Route::get('ar/register',[UserControllerar::class, 'register']);
Route::get('ar/register-designer',[UserControllerar::class, 'registerDesigner']);

Route::post('ar/register_user',[UserControllerar::class, 'register_user']);

Route::get('ar/shop',[ShopControllerar::class, 'index']);
Route::get('ar/product',[ShopControllerar::class, 'product']);

Route::get('ar/chat',[ChatControllerar::class, 'index']);
Route::post('ar/add-message',[ChatControllerar::class, 'addMessage']);
