<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\MarcaController;
use App\Http\Controllers\Admin\TipoController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\TallasController;
use App\Http\Controllers\Admin\ImagenController;

Route::get('',[HomeController::class,'index']);

Route::get('clientes',[ClienteController::class,'index'])->name('clientes.index');

Route::get('productos',[ProductoController::class,'index'])->name('productos.index');
Route::get('productos/nuevo',[ProductoController::class,'nuevo'])->name('productos.nuevo');
Route::post('productos/guardar',[ProductoController::class,'guardar'])->name('productos.guardar');
Route::get('productos/modificar/{producto}',[ProductoController::class,'verProducto'])->name('productos.ver');
Route::put('productos/modificar/{producto}',[ProductoController::class,'guardarMod'])->name('productos.guardarMod');
Route::delete('productos/eliminar/{producto}',[ProductoController::class,'destroy'])->name('productos.destroy');

Route::get('tipos',[TipoController::class,'index'])->name('tipos.index');
Route::post('tipos/guardar',[TipoController::class,'guardar'])->name('tipos.guardar');
Route::delete('tipos/elimimar/{tipo}',[TipoController::class,'destroy'])->name('tipos.destroy');
Route::put('/tipos/guardar/{tipo}',[TipoController::class,'guardarmod'])->name('tipos.guardarmod');

Route::get('marcas',[MarcaController::class,'index'])->name('marcas.index');
Route::post('marcas/guardar',[MarcaController::class,'guardar'])->name('marcas.guardar');
Route::delete('marcas/elimimar/{marca}',[MarcaController::class,'destroy'])->name('marcas.destroy');
Route::put('/marcas/guardar/{marca}',[MarcaController::class,'guardarmod'])->name('marcas.guardarmod');

Route::get('tallas',[TallasController::class,'index'])->name('tallas.index');
Route::post('tallas/guardar',[TallasController::class,'guardar'])->name('tallas.guardar');
Route::delete('tallas/elimimar/{talla}',[TallasController::class,'destroy'])->name('tallas.destroy');
Route::put('/tallas/guardar/{talla}',[TallasController::class,'guardarmod'])->name('tallas.guardarmod');
route::get('tallas/producto/{producto}',[TallasController::class,'mostrarTallas'])->name('tallas.select');
route::post('tallas/productos/{producto}',[TallasController::class,'guardarTallas'])->name('tallasProducto.guardar');

Route::post('imagenes',[ImagenController::class,'store'])->name('imagenes.store');
Route::get('imagenes',[ImagenController::class,'index'])->name('imagenes.index');
Route::get('imagenes/create',[ImagenController::class,'create'])->name('imagenes.create');
Route::delete('imagenes/{imagen}',[ImagenController::class,'destroy'])->name('imagenes.destroy');
Route::put('imagenes/{imagen}',[ImagenController::class,'update'])->name('imagenes.update');
Route::get('imagenes/{imagen}',[ImagenController::class,'show'])->name('imagenes.show');
Route::get('imagenes/{imagen}/edit',[ImagenController::class,'edit'])->name('imagenes.edit');
    