<?php

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

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('student')->group(function(){
    Route::get('/view',[App\Http\Controllers\StudentController::class,'index'])->name('student.view');
    Route::get('/add',[App\Http\Controllers\StudentController::class,'show'])->name('student.add');
    Route::post('/store',[App\Http\Controllers\StudentController::class,'store'])->name('student.store');
    Route::get('/delete/{id}',[App\Http\Controllers\StudentController::class,'delete'])->name('student.delete');





});

Route::get('/employee/index', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/add', [App\Http\Controllers\EmployeeController::class, 'add'])->name('employee.add');
Route::post('/employee/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');