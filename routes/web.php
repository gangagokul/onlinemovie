<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexpageController;
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

Route::get('/',[indexpageController::class,'indexpage']);
Route::get('/register',[indexpageController::class,'register']);
Route::post('/registeraction',[indexpageController::class,'registeraction']);
Route::get('/login',[indexpageController::class,'login']);
Route::post('/loginaction',[indexpageController::class,'loginaction']);
Route::get('/userhome',[indexpageController::class,'userhome']);
Route::get('/booking',[indexpageController::class,'booking']);
Route::post('/bookingaction',[indexpageController::class,'bookingaction']);
Route::get('/viewbooking',[indexpageController::class,'viewbooking']);
Route::get('/edit/{id}',[indexpageController::class,'edit']);
Route::get('/delete/{id}',[indexpageController::class,'delete']);
Route::post('/updateaction/{id}',[indexpageController::class,'updateaction']);
Route::get('/viewprofile',[indexpageController::class,'viewprofile']);
Route::get('/edit1/{id}',[indexpageController::class,'edit1']);
Route::post('/updatedaction/{id}',[indexpageController::class,'updatedaction']);
Route::get('/adminhome',[indexpageController::class,'adminhome']);
Route::get('/adminviewbooking',[indexpageController::class,'adminviewbooking']);
Route::get('/confirm/{id}',[indexpageController::class,'confirm']);
Route::get('/decline/{id}',[indexpageController::class,'decline']);
Route::get('/adminviews',[indexpageController::class,'adminviews']);
Route::get('/logout',[indexpageController::class,'logout']);
Route::get('/adminlogout',[indexpageController::class,'adminlogout']);