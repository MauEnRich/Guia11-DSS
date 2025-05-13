<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentasController;

/*
use App\Models\Venta;

Route::get('/', function () {
    $ventas = Venta::all();
    return view('welcome', ['ventas' => $ventas]);
});*/

Route::get('/venta', [VentasController::class, 'index'])->name('venta.index');

Route::get('/venta/create', [VentasController::class, 'create'])->name('venta.create');

Route::post('/venta', [VentasController::class, 'store'])->name('venta.store');
