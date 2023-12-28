<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class,'index']);
Route::post('/', [TodoController::class,'store'])->name('store-todo');
Route::put('udpate/{todo}', [TodoController::class,'update'])->name('update-todo');
Route::get('/edit/{todo_id}', [TodoController::class,'index']);
