<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[FrontendController::class,'welcome']);//insert data in database table
Route::post('/insert',[FrontendController::class,'store']);//insert data in database table
Route::get('/index',[FrontendController::class,'index']);//show all data

Route::get('/edit/{id}',[FrontendController::class,'edit']);//edit page view route
Route::post('/edit/{id}',[FrontendController::class,'update']);//edit ToDo list route
Route::get('/destroy/{id}',[FrontendController::class,'destroy']);


