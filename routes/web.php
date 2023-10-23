<?php

use App\Http\Controllers\employeeController;
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

// Route::resource('employee',employeeController::class);


Route::get('/employee',[employeeController::class,'index']);
Route::post('/employee',[employeeController::class,'store']);

Route::get('/fetchemployee',[employeeController::class,'fetchEmployeeRecords']);

Route::get('/edit_emp/{id}',[employeeController::class,'edit']);

Route::post('/update_employee/{id}',[employeeController::class,'update']);

Route::post('/delete_employee/{id}',[employeeController::class,'destroy']);