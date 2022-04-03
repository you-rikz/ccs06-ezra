<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EzraController;

Route::get('/', [EzraController::class, 'index']);
Route::get('/chapter/{chapter_number}', [EzraController::class, "readByChapter"]);
Route::get('/all-chapters',[EzraController::class, 'readAllChapters']);

