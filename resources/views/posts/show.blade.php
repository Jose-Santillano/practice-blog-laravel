<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="nav">
        <div class="nav-title">
            <h2><a href="/">Blog de José</a></h2>
        </div>
        <div class="nav-links">
            <a href="/posts/create">Crear un post</a>
        </div>
    </nav>
    <div class="container-posts">
        <article class="content-post">
            <h1>
                {{ $post->title }}
            </h1>
            <p>
                {{ $post->content }}
            </p>
            <a href="/">Inicio</a>
        </article>
    </div>
</body>
</html>