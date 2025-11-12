<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\examenjoelcontroller; // <<--- NUEVA LÍNEA


// RUTAS DEL EXAMEN (ANIMALES)
// Ruta GET para mostrar el reporte de animales
Route::get('reporte-animales', [examenjoelcontroller::class, 'reporteAnimales'])->name('reporteAnimales');

// Ruta POST para eliminar un animal
Route::post('elimina-animal', [examenjoelcontroller::class, 'eliminaAnimal'])->name('eliminaAnimal');