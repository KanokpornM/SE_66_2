<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\CarreciveController;
use App\Http\Controllers\CarController;

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

Route::get('/car', function () {
    return view('car');
})->name('car');

Route::get('/car', [CarController::class,'index'])->name('car');
Route::get('/addcar',[CarController::class,'addcar'])->name('addcar');
Route::post('insert',[CarController::class,'insert']);
Route::get('/edit/{car_id}',[CarController::class,'edit'])->name('edit');
Route::post('update/{car_id}',[CarController::class,'update'])->name('update');
Route::get('/delete/{car_id}',[CarController::class,'delete'])->name('delete');
Route::post('/car',[CarController::class,'search'])->name('search');

Route::get('/carrecive',[carreciveController::class,'carrecive'])->name('carrecive');
Route::get('/addcarrecive',[carreciveController::class,'addcarrecive'])->name('addcarrecive');
//Route::post('/carrecive',[carreciveController::class,'search'])->name('carreciveSearch');
Route::post('/insertcarrecive',[carreciveController::class,'insert'])->name('insertcarrecive');

Route::get('/carcheck',[AdminController::class,'carcheck'])->name('carcheck');

Route::get('/recive',[AdminController::class,'recive'])->name('recive');

Route::get('/list',[ListController::class,'index'])->name('list');
Route::post('/list',[ListController::class,'search'])->name('listSearch');

#oute::get('/employee',[AdminController::class,'employee'])->name('employee');

Route::get('/partlist',[AdminController::class,'partlist'])->name('partlist');

Route::get('/quotation',[AdminController::class,'quotation'])->name('quotation');

Route::get('/receipt',[AdminController::class,'receipt'])->name('receipt');

Route::get('/addcar',[AdminController::class,'addcar'])->name('addcar');

Route::get('/employee',[employeeController::class,'index'])->name('employee');

Route::get('/addcarcheck',[AdminController::class,'addcarcheck'])->name('addcarcheck');

Route::get('/addcarrecive',[AdminController::class,'addcarrecive'])->name('addcarrecive');

Route::get('/addrecive',[AdminController::class,'addrecive'])->name('addrecive');