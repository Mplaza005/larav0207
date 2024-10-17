<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OperacionesController;



 Route::get('/cuadratica',[OperacionesController::class,'cuadratica']);
 Route::post('/cuadratica/store',[OperacionesController::class,'calcularCuadratica'])->name('cuadratica.store');

 Route::get('/sumar_frm',[OperacionesController::class,'frm_suma']);
 Route::post('/suma/store',[OperacionesController::class,'sumarOps'])->name('operaciones.store');



