<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear post</title>

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
    <div class="container-form">
        <form action="/posts" method="POST" class="form-post">
            <h2>Crear post</h2>
            
            @csrf
    
            <div class="form-group">
                <label for="">Título</label>
                <input type="text" name="title">
            </div>
            <div class="form-group">
                <label for="">Resumen</label>
                <textarea name="excerpt" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="">Contenido</label>
                <textarea name="content" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <button>Guardar</button>
            </div>           
        </form>
    </div>
</body>
</html>