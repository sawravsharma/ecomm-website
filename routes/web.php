<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/','login');
Route::view('/register','register');
Route::get('/dashboard',[UserController::class,'dashboard']);
Route::get('/prdashboard',[ProductController::class,'prdashboard']);
Route::post("/add",[ProductController::class,'add']);
Route::view("/add",'add');
Route::post("/login", [UserController::class,'login']);
Route::post("/register", [UserController::class,'register']);
Route::post('/admin',[UserController::class,'admin']);
Route::get("/project", [ProductController::class,'index']);
Route::get("detail/{id}", [ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart", [ProductController::class,'addToCart']);
Route::get("cartlist", [ProductController::class,'cartList']);
Route::get("removecart/{id}", [ProductController::class,'removeCart']);
Route::get("ordernow", [ProductController::class,'orderNow']);
Route::get("orderplace", [ProductController::class,'orderPlace']);
Route::get("myorders", [ProductController::class,'myOrders']);