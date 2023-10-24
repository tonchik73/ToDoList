<?php

use App\Http\Controllers\TaskController;
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
Route::redirect('/', '/tasks');
Route::get('/tasks', [TaskController::class, 'index'])->middleware('auth')->name('task.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('task.store');
//Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('task.show');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('task.delete');


Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

