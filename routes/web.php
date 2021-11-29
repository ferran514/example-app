<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

/*
Route::get('/empleado', function () {
    return view('empleado.index');
});
*/

//Route::get('empleado/create',[EmpleadoController::class,'create']);

//con esta linea vamos a hacerlo todas las rutas del empleadocontroller
//poniendo el metodo middleware 'auth' no deja entrar sin verificar
Route::resource('empleado', EmpleadoController::class)->middleware('auth');
//anulo que en el login no salga ni registro ni resetear la contraseña
Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});