<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Método para almacenar la información en la base de datos.
    public function store(Request $request)
    {
        //Forma personal y más segura.
        Post::create([
            'title'=>$request->input('title'),
            'excerpt'=>$request->input('excerpt'),
            'content'=>$request->input('content'),
        ]);

        return redirect('/');


        //Forma corta.
        //Post::create($request->all());

        //Forma normal.

        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->excerpt = $request->input('excerpt');
        // $post->content = $request->input('content');

        // $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Método para mostrar la información extraída de la base de datos.
    public function show(Post $post)
    {
        //Forma segura.
        //$post = Post::findOrFail($id);

        //Recuperamos los comentarios.
        $comments = $post->comments;

        return view('posts.show')->with([
            'post'=>$post,
            'comments'=>$comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Método para extraer y mostrar la información de la vista edit.
    public function edit(Post $post)
    {
        return view('posts.edit')->with([
            'post'=>$post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Método para actualizar directamente en la base de datos.
    public function update(Request $request, Post $post)
    {
        $post->update([
            'title'=>$request->input('title'),
            'excerpt'=>$request->input('excerpt'),
            'content'=>$request->input('content'),
        ]);
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Método encargado de eliminar el post en particular.
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/');
    }
}
