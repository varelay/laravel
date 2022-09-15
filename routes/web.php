<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\controladorLogin;
use App\Http\Controllers\getController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\authController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\deleteController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [controladorLogin::class,'index']);

Route::get('login', ['as'=> 'login', function () {
    return view('login');
}]);

Route::get('registro', ['as'=> 'registro', function () {
    return view('auth.register');
}]);

Route::get('inicio', [authController::class,'inicio'])->name('inicio');

Route::get('registroArticulos', [authController::class, 'registroArticulos'])->name('NArticulos');


Route::get('registroMascotas', [authController::class, 'registroMascotas'])->name('NMascotas');

Route::get('registroUsuarios', [authController::class, 'registroUsuarios'])->name('NUsuarios');

Route::get('Solicitar_articulo', [getController::class, 'articulo_comprar'])->name('SolicitarArticulo');

Route::get('solicitarAdopcion', [getController::class, 'mascota_adoptar'])->name('SolicitarAdopcion');

/*RUTAS DE ENVIO DE INFORMACION A BD*/
Route::post('nuevoUsuario',[PostController::class, 'registro_usuario'])->name('nuevoUsuario.registro_usuario');
Route::post('nuevoArticulo',[PostController::class, 'registro_articulo'])->name('nuevoArticulo.registro_articulo');
Route::post('nuevaMascota',[PostController::class, 'registro_mascota'])->name('nuevaMascota.registro_mascota');
Route::post('user',[controladorLogin::class, 'registro'])->name('user.registro');
Route::post('usuario',[PostController::class, 'registrar'])->name('registrar');
/*FIN*/

/*RUTAS DE RECUPERACION DE DATOS DE BD*/
Route::get('usuarios','App\Http\Controllers\getController@recuperar_usuario' )->name('actUser');
Route::get('mascotas','App\Http\Controllers\getController@recuperar_mascota' )->name('actMascota');
Route::get('articulos','App\Http\Controllers\getController@recuperar_articulo' )->name('actArticulo');
Route::get('estadisticas/mascotas', 'App\Http\Controllers\getController@estadisticas_mascota')->name('estMascotas');
Route::get('estadisticas/articulos', 'App\Http\Controllers\getController@estadisticas_articulo')->name('estArticulos');
Route::get('estadisticas/usuarios', 'App\Http\Controllers\getController@estadisticas_usuario')->name('estUsuarios');
/*FIN*/

/*RUTAS PARA ADOPCIÓN Y COMPRA*/
Route::post('adopcion/Info/{id}', [updateController::class, 'changeStatus_adoptado'])->name('adoptado');
Route::post('compra/Info/{id}', [updateController::class, 'changeStatus_vendido'])->name('compra');
Route::post('carrito/Info/{id}', [updateController::class, 'changeStatus_carrito'])->name('carrito');
Route::get('carrito/Info', [updateController::class, 'carrito'])->name('carritoCompras');
Route::get('pagando', [updateController::class, 'articulo_vendido'])->name('pagando');
Route::post('eliminar/Carito/{id}', [updateController::class, 'changeStatus_disponible'])->name('disponible');

/*FIN*/

/*RUTAS DE EDICION DE REGISTROS*/
Route::get('editarMascota/{id}','App\Http\Controllers\deleteController@delete_mascota')->name('mascotasEdit');
/*FIN*/

/*RUTAS DE ELIMINACION DE REGISTROS*/
Route::delete('mascotas/{id}',[deleteController::class, 'delete_mascota'])->name('mascotasDelete');
Route::delete('articulos/{id}',[deleteController::class, 'delete_articulo'])->name('articulosDelete');
Route::delete('usuarios/{id}',[deleteController::class, 'delete_usuario'])->name('usuariosDelete');
/*FIN*/

/*ACTUALIZACIÓN DE REGISTROS*/
Route::get('articuloU/{id}',[updateController::class, 'get_articulo'])->name('articulosUpdate');
Route::post('articuloAct/{id}',[updateController::class, 'update_articulo'])->name('articuloUpdated');
Route::get('mascotaU/{id}',[updateController::class, 'get_mascota'])->name('mascotasUpdate');
Route::post('mascotaAct/{id}',[updateController::class, 'update_mascota'])->name('mascotaUpdated');
Route::get('usuarioU/{id}',[updateController::class, 'get_usuario'])->name('usuariosUpdate');
Route::post('usuarioAct/{id}',[updateController::class, 'update_usuario'])->name('usuarioUpdated');

/*FIN*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('charts', 'HomeController@chartjs');

/*RUTAS PRA GENERAR PDF*/
Route::get('/imprimir/reporteMascotasPDF', 'App\Http\Controllers\PdfController@reporteMascotas')->name('reporteMascotas');
Route::get('/imprimir/reporteArticulosPDF', 'App\Http\Controllers\PdfController@reporteArticulos')->name('reporteArticulos');
Route::get('/imprimir/reporteUsuariosPDF', 'App\Http\Controllers\PdfController@reporteUsuarios')->name('reporteUsuarios');
/*FIN*/
