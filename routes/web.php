<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;

Route::resource('productos', ProductoController::class);

// Redirigir la ruta raíz a /productos
Route::get('/', function () {
    return redirect()->route('productos.index');
});
