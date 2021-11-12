<?php

use App\Http\Controllers\Admin\CtrSancion;
use App\Http\Controllers\Admin\CtrUnidad;
use App\Http\Controllers\CtrBanco;
use App\Http\Controllers\CtrCategoria;
use App\Http\Controllers\CtrCuenta;
use App\Http\Controllers\CtrEnfermedad;
use App\Http\Controllers\CtrIntegrante;
use App\Http\Controllers\CtrMedicamento;
use App\Http\Controllers\CtrPagoPropietario;
use App\Http\Controllers\CtrProveedor;
use App\Http\Controllers\CtrServicio;
use App\Http\Controllers\CtrTipoUnidad;
use Illuminate\Support\Facades\Route;

// Reportes de lista
Route::get('banco/exportar', [CtrBanco::class, 'exportar'])->name('banco.exportar');

Route::get('categoria/exportar', [CtrCategoria::class, 'exportar'])->name('categoria.exportar');

Route::get('cuenta/exportar', [CtrCuenta::class, 'exportar'])->name('cuenta.exportar');

Route::get('enfermedad/exportar', [CtrEnfermedad::class, 'exportar'])->name('enfermedad.exportar');

Route::get('habitante/exportar', [CtrIntegrante::class, 'exportar'])->name('habitante.exportar');

Route::get('medicamento/exportar', [CtrMedicamento::class, 'exportar'])->name('medicamento.exportar');

Route::get('proveedor/exportar', [CtrProveedor::class, 'exportar'])->name('proveedor.exportar');

Route::get('sancion/exportar', [CtrSancion::class, 'exportar'])->name('sancion.exportar');

Route::get('servicio/exportar', [CtrServicio::class, 'exportar'])->name('servicio.exportar');

Route::get('tipo-unidad/exportar', [CtrTipoUnidad::class, 'exportar'])->name('tipo-unidad.exportar');


// Reportes parametrizados
Route::get('unidades-con-propietario/exportar', [CtrUnidad::class, 'exportarConPropietario'])->name('unidad.exportar-con-propietario');

Route::get('unidades-sin-propietario/exportar', [CtrUnidad::class, 'exportarSinPropietario'])->name('unidad.exportar-sin-propietario');

Route::get('unidades-con-habitantes/exportar', [CtrUnidad::class, 'exportarConHabitantes'])->name('unidad.exportar-con-habitantes');

Route::get('unidades-sin-habitantes/exportar', [CtrUnidad::class, 'exportarSinHabitantes'])->name('unidad.exportar-sin-habitantes');


// Reportes de procesos
Route::get('recibo/{recibo}', [CtrPagoPropietario::class, 'exportarRecibo'])->name('pago-propietario.recibo');
