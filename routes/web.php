<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\CarreciveController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarCheckController;
use App\Http\Controllers\reciveController;

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

Route::get('/carrecive',[CarreciveController::class,'carrecive'])->name('carrecive');
Route::get('addcarrecive',[CarreciveController::class,'addcarrecive'])->name('addcarrecive');
Route::post('/carrecive',[carreciveController::class,'search'])->name('carreciveSearch');
Route::post('/insertcarrecive',[CarreciveController::class,'insert'])->name('insertcarrecive');
Route::get('/deletecarrecive/{carR_id}',[CarreciveController::class,'delete'])->name('deletecarrecive');
Route::get('/editcarrecive/{carR_id}',[CarreciveController::class,'edit'])->name('editcarrecive');
Route::post('updatecarrecive/{carR_id}',[CarreciveController::class,'update'])->name('updatecarrecive');


#Route::get('/carcheck',[AdminController::class,'carcheck'])->name('carcheck');
Route::get('/carcheck',[CarCheckController::class,'index'])->name('carcheck');
Route::post('/carcheck',[CarCheckController::class,'search'])->name('carcheckSearch');
Route::get('/deletecarcheck/{carcheck_id}',[CarCheckController::class,'delete'])->name('delete'); #ชื่อซ้ำกับของ car
Route::post('/insertcarcheck', [CarCheckController::class, 'insert'])->name('insertcarcheck');
Route::get('/addcarcheck',[CarCheckController::class,'addcarcheck'])->name('addcarcheck');
Route::get('/editcarcheck/{carcheck_id}',[CarCheckController::class,'edit'])->name('editcarcheck');
Route::post('updatecarcheck/{carcheck_id}',[CarCheckController::class,'update'])->name('updatecarcheck');


Route::get('/list',[ListController::class,'index'])->name('list');
Route::post('/list',[ListController::class,'search'])->name('listSearch');

#oute::get('/employee',[AdminController::class,'employee'])->name('employee');

Route::get('/partlist',[AdminController::class,'partlist'])->name('partlist');
Route::get('/quotation',[AdminController::class,'quotation'])->name('quotation');
Route::get('/receipt',[AdminController::class,'receipt'])->name('receipt');
Route::get('/addcar',[AdminController::class,'addcar'])->name('addcar');


#Route::get('/addcarcheck',[AdminController::class,'addcarcheck'])->name('addcarcheck');

Route::get('/recive',[reciveController::class,'index2'])->name('recive');
Route::get('/editrecive/{carcheck_id}',[reciveController::class,'edit'])->name('editrecive');
Route::get('/addrecive',[reciveController::class,'addrecive'])->name('addrecive');
Route::post('/insertrecive', [reciveController::class, 'insert'])->name('insertrecive');
Route::post('updaterecive/{carcheck_id}',[reciveController::class,'update'])->name('updaterecive');


#Employee Route
Route::get('/employee',[employeeController::class,'index'])->name('employee');
Route::get('/addemployee',[employeeController::class,'getposition'])->name('addemp');
Route::post('/insertemp',[employeeController::class,'insert'])->name('insertemp');
Route::get('/deleteemp/{emp_id}',[employeeController::class,'delete'])->name('deleteemp');
Route::get('/editemp/{emp_id}',[employeeController::class,'edit'])->name('editemp');
Route::post('updateemp/{emp_id}',[employeeController::class,'update'])->name('updateemp');
Route::post('/employee',[employeeController::class,'search'])->name('search');