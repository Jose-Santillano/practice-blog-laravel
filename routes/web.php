<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

//Ruta encargada de mostrar la página principal.
Route::get('/', [HomeController::class, "show"]);

//Agrupamos las rutas para mejorar la legibilidad del código.
Route::controller(PostsController::class)->group(function () {
    
    //Ruta encargada de mostrar el formulario de los posts.
    Route::get('/posts/create', "create");

    //Ruta encargada de mostar los posts.
    Route::get('/posts/{post}', "show");

    //Ruta para almacenar los datos.
    Route::post('/posts',  "store");

    //Ruta para mostrar la edición de un articulo.
    Route::get('/posts/{id}/edit', "edit");

    //Ruta para actualizar los datos.
    Route::patch('/posts/{id}', "update");

    //Ruta para eliminar los datos.
    Route::delete('/posts/{id}', "destroy");
});


//Ejemplos...

/*
// Route::get('/nosotros', function () {
//     return 'Nosotros.';
// });

//Wildcard o comodín
Route::get('/nosotros/{id}', function ($id) {
    return $id;
});

//Recuperar un segmento de la ruta.
Route::get('/ejemplo/{id}', function ($id) {
    //Usamos un helper llamado request, y llamamos el método segment.
    return request()->segment(1);
});

//Agrupar rutas.
// > Ejemplo de ruta con el mismo prefijo "company"
// Route::get('/company/nosotros', function () {
//     return 'Contacto.';
// });

// Route::get('/company/contacto', function () {
//     return 'Contacto.';
// });

// > Así se agruparían.
Route::prefix('/company')->group(function () {
    Route::get('/nosotros', function () {
        return 'Company/Nosotros.';
    });
    
    Route::get('/contacto', function () {
        return 'Company/contacto.';
    });
});

//Ejemplo de ruta.
Route::get('/contacto', function () {
    return 'Contacto.';
});
*/