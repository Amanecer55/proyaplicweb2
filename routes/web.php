<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadoscontroller;
use App\Http\Controllers\examenjoelcontroller; // <<--- NUEVA LÍNEA

Route::get('inicio',[empleadoscontroller::class,'inicio'])->name('inicio');

Route::get('reporteempleados',[empleadoscontroller::class,'reporteempleados'])->name('reporteempleados');

Route::get('altaempleado',[empleadoscontroller::class,'altaempleado'])->name('altaempleado');
Route::post('guardaempleado',[empleadoscontroller::class,'guardaempleado'])->name('guardaempleado');
// Ruta GET para mostrar el formulario
Route::get('mostrarFormulario', [AngelController::class, 'mostrarFormulario'])->name('mostrarFormulario');

// Ruta POST para procesar el formulario
Route::post('procesarFormulario', [AngelController::class, 'procesarFormulario'])->name('procesarFormulario');

Route::get('desactivaempleado',[empleadoscontroller::class,'desactivaempleado'])->name('desactivaempleado');
Route::get('activaempleado',[empleadoscontroller::class,'activaempleado'])->name('activaempleado');
Route::get('eliminaempleado',[empleadoscontroller::class,'eliminaempleado'])->name('eliminaempleado');
Route::get('editaempleado',[empleadoscontroller::class,'editaempleado'])->name('editaempleado');
Route::post('actualizaemp',[empleadoscontroller::class,'actualizaemp'])->name('actualizaemp');

// RUTAS DEL EXAMEN (ANIMALES)
// Ruta GET para mostrar el reporte de animales
Route::get('reporte-animales', [ExamenJoelController::class, 'reporteAnimales'])->name('reporteAnimales');

// Ruta POST para eliminar un animal
Route::post('elimina-animal', [ExamenJoelController::class, 'eliminaAnimal'])->name('eliminaAnimal');
