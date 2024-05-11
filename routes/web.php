<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AssignDesignationController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\SignatoryController;

/*Route::get('/', function () {
    return view('welcome');
});*/

// Mainmenu Route
Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');

// Employees routes
Route::get('employees/details', [EmployeeController::class, 'showDetails'])->name('employees.details');
Route::get('employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
Route::get('employees/{emp_num}/assign-designation', [AssignDesignationController::class, 'create'])
    ->name('employees.assign-designation.create');
Route::post('employees/{employee_id}/assign-designations', [AssignDesignationController::class, 'store'])
    ->name('assign-designations.store');
Route::resource('employees', EmployeeController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);


// Designations routes
Route::resource('designations', DesignationController::class);

// Departments routes
Route::resource('departments', DepartmentController::class);

// Leaves routes
Route::get('leaves/create', [LeaveController::class, 'create'])->name('leaves.create');
Route::post('leaves', [LeaveController::class, 'store'])->name('leaves.store');
Route::get('leaves', [LeaveController::class, 'index'])->name('leaves.index');
Route::delete('leaves/{leave}', [LeaveController::class, 'destroy'])->name('leaves.destroy');

// Signatories routes
Route::get('signatories', [SignatoryController::class, 'index'])->name('signatories.index');
Route::get('signatories/create', [SignatoryController::class, 'create'])->name('signatories.create');
Route::post('signatories', [SignatoryController::class, 'store'])->name('signatories.store');
Route::delete('signatories/{signatory}', [SignatoryController::class, 'destroy'])->name('signatories.destroy');

// Payroll Routes
Route::get('payroll', [PayrollController::class, 'index'])->name('payroll.index');
Route::post('payroll/generate', [PayrollController::class, 'generatePayroll'])->name('payroll.generate');
Route::get('payroll/create', [PayrollController::class, 'create']) ->name('payroll.create'); 
Route::post('payroll', [PayrollController::class, 'store'])->name('payroll.store');
Route::delete('payroll/{payroll}', [PayrollController::class, 'delete'])->name('payroll.destroy');