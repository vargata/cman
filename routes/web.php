<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SessionController;
use App\Models\Company;
use App\Models\Employee;

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

Route::get('companies', function () {
    
    return view('companies', [
        'companies' => Company::orderBy('name', 'ASC')->paginate(10)
    ]);
    
})->middleware('auth');

Route::get('employees', function () {
    
    return view('employees', [
        'employees' => Employee::with('company')->paginate(10)
    ]);
    
})->middleware('auth');

Route::get('companies/{company}', function ($id) {
    
    return view('company', [
        'company' => Company::findOrFail($id)
    ]);
    
})->middleware('auth');

Route::get('employees/{employee}', function ($id) {
    
    return view('employee', [
        'employee' => Employee::findOrFail($id)
    ]);
    
})->middleware('auth');

Route::get('employee.edit/{employee}', function ($id) {
    
    return view('employee.edit', [
        'employee' => Employee::findOrFail($id)
    ]);
    
})->middleware('auth');

Route::post('employee.edit/{employee}', [EmployeeController::class, 'saveEmployee'])->middleware('auth');
Route::get('employee.delete/{employee}', [EmployeeController::class, 'deleteEmployee'])->middleware('auth');

Route::get('login', [SessionController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('login', [SessionController::class, 'login'])->middleware('guest');
Route::get('logout', [SessionController::class, 'logout'])->name('logout')->middleware('auth');