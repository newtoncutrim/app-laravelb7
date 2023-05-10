<?php
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     $s = new SiteController();
//     echo $s->index();
// });

Route::get('/', [SiteController::class, 'index']);

Route::get('/ex', [SiteController::class, 'exercicio2']);

// Route::get('/include', [SiteController::class, 'include1']);

Route::get('/comp', [SiteController::class, 'componente']);

Route::get('/layout', [SiteController::class, 'layout']);

