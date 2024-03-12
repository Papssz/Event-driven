<?php

use App\Http\Controllers\AssignDesignationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

//employee routes
Route::get('/employees/details', [EmployeeController::class, 'showDetails'])->name('employees.details');
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

//assign designation routes

Route::get('/employees/{emp_num}/assign-designation', [AssignDesignationController::class, 'create'])
    ->name('employees.assign-designation.create');
Route::post('/employees/{employee_id}/assign-designations', [AssignDesignationController::class, 'store'])
    ->name('assign-designations.store');
//designation routes

Route::resource('designations', DesignationController::class);
//department routes
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');


