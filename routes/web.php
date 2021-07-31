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

Route::get('/employee/index', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/add', [App\Http\Controllers\EmployeeController::class, 'add'])->name('employee.add');
Route::post('/employee/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');