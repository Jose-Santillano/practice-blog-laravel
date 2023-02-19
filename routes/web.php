<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;

//Ruta encargada de mostrar la página principal.
Route::get('/', [HomeController::class, "show"]);

//Agrupamos las rutas para mejorar la legibilidad del código.
Route::controller(PostsController::class)->group(function () {

    Route::middleware('auth')->group(function () {
        //Ruta encargada de mostrar el formulario de los posts.
        Route::get('/posts/create', "create");

        //Ruta para almacenar los datos.
        Route::post('/posts',  "store");

        //Ruta para mostrar la edición de un articulo.
        Route::get('/posts/{post}/edit', "edit");

        //Ruta para actualizar los datos.
        Route::patch('/posts/{post}', "update");
        //Ruta para eliminar los datos.
        Route::delete('/posts/{post}', "destroy");
    }); 
    
    //Ruta encargada de mostar los posts.
    Route::get('/posts/{post}', "show");
});

Route::middleware('forbidden.words')->post('/posts/{post}/comments', [CommentsController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
