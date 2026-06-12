<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ruta principal del blog. Al ingresar a la URL raíz del proyecto
| (ej. blogusap.com) se lanza la vista principal del blog.
|
*/

Route::get('/', function () {
    return view('blog');
});
