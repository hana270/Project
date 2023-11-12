<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BebeController;

Route::get('/bebes/index', [BebeController::class, 'index']);
Route::get('/bebes/create', [BebeController::class, 'create'])->name('bebes.create');

Route::get('/bebes/destroy', [BebeController::class, 'destroyForm']);
Route::delete('/bebes/destroy/{bebe_id}', [BebeController::class, 'destroyById'])->name('bebes.destroyById');




?>