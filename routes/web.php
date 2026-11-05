<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get("/", [IdeaController::class, "index"])->name("ideas.index"); 

Route::post('/ideas', [IdeaController::class, 'store'])
->name('ideas.store');