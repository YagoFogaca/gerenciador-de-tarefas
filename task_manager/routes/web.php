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

Route::get('/', [TaskController::class, 'index']);
Route::get('/create-task', [TaskController::class, 'create']);
Route::get('/update-task/{id}', [TaskController::class, 'update'])->name('update');

Route::post('/create', [TaskController::class, 'createTask'])->name('create');
Route::get('/reset-tasks', [TaskController::class, 'deleteAll'])->name('reset');
Route::get('/delete/{id}', [TaskController::class, 'delete'])->name('delete');
Route::post('/update/{id}', [TaskController::class, 'updateTask'])->name('updateTask');
