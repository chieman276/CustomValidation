<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TaskController;
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
Route::get('index', function () {
    return view('modules.customer.index');
})->name('index');

Route::get('show', function () {
    return view('modules.customer.show');
})->name('show');

Route::get('edit', function () {
    return view('modules.customer.edit');
})->name('edit');

Route::put('update', function () {
    return view('modules.customer.update');
})->name('update');

Route::delete('delete', function () {
    return view('modules.customer.delete');
})->name('delete');

Route::get('customers', [CustomerController::class, 'index']);

// Route::prefix('controller')->group(function() {
    
//     Route::get('index', [TaskController::class, 'index'])->name('tasks.index');
//     Route::get('create', [TaskController::class, 'create'])->name('tasks.create');
//     Route::post('/', [TaskController::class, 'store'])->name('tasks.store');
//     Route::get('show', [TaskController::class, 'show'])->name('tasks.show');
//     Route::get('edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
//     Route::put('update/{id}', [TaskController::class, 'update'])->name('tasks.update');
//     Route::delete('delete/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
// });

Route::prefix('tasks')->group(function () {
    Route::get('index', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('store', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/{tasksId}' , [TaskController::class,'show'])->name('tasks.show');
    Route::get('/{taskId}/edit' , [TaskController::class , 'edit'])->name('tasks.edit');
    Route::PATCH('update/{taskId}' , [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('delete/{photo}' , [TaskController::class , 'destroy'])->name('tasks.destroy');
    
});

