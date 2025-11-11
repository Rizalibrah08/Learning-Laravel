<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JabatanController;
use App\Models\Jabatan;

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

// Route::get('/', function () {
//     return view('welcome');
// });  

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login_process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// employee
Route::get('/employee', [EmployeeController::class, 'index'])->name('emp');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('emp_create');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('emp_store');
Route::delete('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('emp_delete');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('emp_edit');
Route::put('/employee/update/{id}', [EmployeeController::class, 'update'])->name('emp_update');

// Jabatan
Route::get('/jabatan', [JabatanController::class, 'index'])->name('jbt');
Route::get('/jabatan/create', [JabatanController::class, 'create'])->name('jbt_create');
Route::post('/jabatan/store', [JabatanController::class, 'store'])->name('jbt_store');
Route::delete('/jabatan/delete/{jabatan_id}', [JabatanController::class, 'delete'])->name('jbt_delete');
Route::get('/jabatan/edit/{jabatan_id}', [JabatanController::class, 'edit'])->name('jbt_edit');
Route::put('/jabatan/update/{jabatan_id}', [JabatanController::class, 'update'])->name('jbt_update');
// Route::get('/payroll', [EmployeeController::class, 'index'])->name('pay');