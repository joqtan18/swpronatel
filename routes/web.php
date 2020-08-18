<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});
//Rutas de los controladores
Route::Resource('revision','RevisionController');
Route::Resource('administrador','AdministradorController');
Route::Resource('ingeniero','IngenieroController');
Route::Resource('espectador','EspectadorController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('tablet/operativa','RevisionController@operativa');
Route::post('tablet/observada','RevisionController@observada');
Route::get('administrador/estado','AdministradorController@');

//Reportes
Route::get('reporterevisionexcel/','RevisionController@descargarEXCEL');
Route::get('reporterevisioningexcel/','RevisionController@descargaringEXCEL');
//PDF
Route::get('reportepdfdiario/','ReporteController@reportediarioPDF');
Route::post('recebirreportetablet/','ReporteController@recebirreporteTablet');
