<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
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

Route::get('/car',[AdminController::class,'car'])->name('car');

Route::get('/carrecive',[AdminController::class,'carrecive'])->name('carrecive');

Route::get('/carcheck',[AdminController::class,'carcheck'])->name('carcheck');

Route::get('/recive',[AdminController::class,'recive'])->name('recive');

Route::get('/list',[AdminController::class,'list'])->name('list');

Route::get('/employee',[AdminController::class,'employee'])->name('employee');

Route::get('/partlist',[AdminController::class,'partlist'])->name('partlist');

Route::get('/quotation',[AdminController::class,'quotation'])->name('quotation');

Route::get('/receipt',[AdminController::class,'receipt'])->name('receipt');

Route::get('/addcar', function () {
    return view('addcar');
})->name('addcar');

