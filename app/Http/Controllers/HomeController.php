<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class HomeController extends Controller
{
    //Creamos una función para mostrar la página.
    public function show(){

        $posts = Post::get();

        //$posts = DB::table('posts')->get();

        //Para visualizar los datos en el DOM.
        //dd($posts);

        // $posts = [
        //     [
        //         'title'=>'Novedades de Laravel 9.',
        //         'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi obcaecati veritatis sunt itaque vel! Vel at id facilis nesciunt excepturi, recusandae, provident et nemo officia totam ipsum libero tempora quam!'
        //     ],
        //     [
        //         'title'=>'Curso de Laravel 9.',
        //         'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi obcaecati veritatis sunt itaque vel! Vel at id facilis nesciunt excepturi, recusandae, provident et nemo officia totam ipsum libero tempora quam!'
        //     ],
        //     [
        //         'title'=>'Manejo básico de Eloquent.',
        //         'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi obcaecati veritatis sunt itaque vel! Vel at id facilis nesciunt excepturi, recusandae, provident et nemo officia totam ipsum libero tempora quam!'
        //     ]
        // ];
    
        //Mandamos información a la vista mediante un array de segundo parametro con los elementos.
        /*
        return view('welcome', [
            'posts'=>$posts
        ]);
        */
    
        //Otra forma de enviar la información.
        return view('welcome')->with([
            'posts'=>$posts,
        ]);
    
        //Otra forma de enviarla.
        //return view('welcome')->with('posts', $posts)->with('foo', 'bar');
    }
}
