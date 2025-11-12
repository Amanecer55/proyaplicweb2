<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Benjamincontroller;




Route::get('benjaminbenjamin', [Benjamincontroller::class, 'benjaminbenjamin'])->name('benjaminbenjamin');
Route::post('guardabenjamin', [Benjamincontroller::class, 'guardabenjamin'])->name('guardabenjamin');