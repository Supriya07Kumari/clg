<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Models\College;


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

Route::get('/',[CollegeController::class,'homePage'])->name('homePage');

Route::get('/delete/{id}',[CollegeController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[CollegeController::class,'edit'])->name('edit');
Route::post('/update/{id}',[CollegeController::class,'update'])->name('update');

Route::get('/insert',[CollegeController::class,'insertPage'])->name('insertPage');
Route::post('/insert',[CollegeController::class,'insertData'])->name('insertData');

