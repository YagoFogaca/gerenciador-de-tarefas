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
Route::get('/update-task/{id}', [TaskController::class, 'update']);

Route::post('/create', [TaskController::class, 'createTask'])->name('create');
