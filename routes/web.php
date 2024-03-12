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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/car', function () {
    return view('car');
})->name('car');

Route::get('/carrecive', function () {
    return view('carrecive');
})->name('carrecive');

Route::get('/carcheck', function () {
    return view('carcheck');
})->name('carcheck');

Route::get('/recive', function () {
    return view('recive');
})->name('recive');

Route::get('/list', function () {
    return view('list');
})->name('list');

Route::get('/employee', function () {
    return view('employee');
})->name('employee');


Route::get('/partlist', function () {
    return view('partlist');
})->name('partlist');

Route::get('/quotation', function () {
    return view('quotation');
})->name('quotation');

Route::get('/receipt', function () {
    return view('receipt');
})->name('receipt');

Route::get('/addcar', function () {
    return view('addcar');
})->name('addcar');

