<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

//creat and store an idea

Route::get("/", [IdeaController::class, "index"])->name("ideas.index"); 

Route::post('/ideas', [IdeaController::class, 'store'])
->name('ideas.store');

// edit an idea
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])
->name('ideas.edit');

//update an idea
Route::put('/ideas/{idea}', [IdeaController::class, 'update'])
->name('ideas.update');

// delete an idea
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy'])
->name('ideas.destroy');