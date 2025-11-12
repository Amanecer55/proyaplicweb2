<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadoscontroller;



Route::get('altaempleado', [empleadoscontroller::class, 'altaempleado'])->name('altaempleado');
Route::post('guardaempleado', [empleadoscontroller::class, 'guardaempleado'])->name('guardaempleado');
Route::get('altacliene', [empleadoscontroller::class,'altacliente'])->name('altacliente');