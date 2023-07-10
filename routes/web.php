<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/todos', [TodoController::class, 'index'])->name('todos.index')->middleware('web');
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store')->middleware('web');
Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy')->middleware('web');

