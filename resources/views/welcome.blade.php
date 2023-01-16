<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de José</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="nav">
        <div class="nav-title">
            <h2>Blog de José</h2>
        </div>
        <div class="nav-links">
            <a href="/posts/create">Crear un post</a>
        </div>
    </nav>
    <div class="container-posts">

        <div class="title-description">
            <h2>Últimos posts</h2>
        </div>

        @foreach ($posts as $post)
            <article class="content-post">
                <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                <p>{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </div>
</body>
</html>
