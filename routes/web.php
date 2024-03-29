<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AssignDesignationController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\SignatoryController;

Route::get('/', function () {
    return view('welcome');
});

// Employees routes
Route::prefix('employees')->group(function () {
    Route::get('/details', [EmployeeController::class, 'showDetails'])->name('employees.details');
    Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::put('/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
    Route::get('/{emp_num}/assign-designation', [AssignDesignationController::class, 'create'])
        ->name('employees.assign-designation.create');
    Route::post('/{employee_id}/assign-designations', [AssignDesignationController::class, 'store'])
        ->name('assign-designations.store');
    Route::resource('employees', EmployeeController::class);
});

// Designations routes
Route::resource('designations', DesignationController::class);

// Departments routes
Route::resource('departments', DepartmentController::class);

// Leaves routes
Route::prefix('leaves')->group(function () {
    Route::get('/create', [LeaveController::class, 'create'])->name('leaves.create');
    Route::post('/', [LeaveController::class, 'store'])->name('leaves.store');
    Route::get('/', [LeaveController::class, 'index'])->name('leaves.index');
});

// Signatories routes
Route::prefix('signatories')->group(function () {
    Route::get('/', [SignatoryController::class, 'index'])->name('signatories.index');
    Route::get('/create', [SignatoryController::class, 'create'])->name('signatories.create');
    Route::post('/', [SignatoryController::class, 'store'])->name('signatories.store');
});
