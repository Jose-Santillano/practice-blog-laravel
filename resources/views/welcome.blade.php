@extends('layout.app')

@section('title', 'Bienvenidos')

@section('content')
    <div class="container-posts">
        <div class="title-description">
            <h2>Últimos posts</h2>
        </div>
        @foreach ($posts as $post)
            <article class="content-post">
                <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                <p>{{ $post->excerpt }}</p>
            </article>
            @unless ($post->id > 4)
                Post menor a 4
            @endunless
        @endforeach
    </div>
@endsection