<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

// GET all students
Route::get('/students', [StudentsController::class, 'index']);

// GET one student
Route::get('/students/{id}', [StudentsController::class, 'show']);

// POST create
Route::post('/students', [StudentsController::class, 'store']);

// PUT update
Route::put('/students/{id}', [StudentsController::class, 'update']);

// PATCH update
Route::patch('/students/{id}', [StudentsController::class, 'patch']);

// DELETE all
Route::delete('/students', [StudentsController::class, 'destroyAll']);

// DELETE one
Route::delete('/students/{id}', [StudentsController::class, 'destroy']);