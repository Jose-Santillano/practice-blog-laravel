<x-dynamic-component
    :component="Auth::check() ? 'appLayout' : 'guestLayout'"
    :title="$post->title"
>
    <x-slot name="header">{{ $post->title }}</x-slot>
    <div class="container-posts">
        <article class="content-post">
            <h1>
                {{ $post->title }}
            </h1>
            <p>
                {{ $post->content }}
            </p>
            <a href="/">Inicio</a>
            @can('update', $post)
                <a href="/posts/{{ $post->id }}/edit">Editar</a>
            @endcan
            @can('delete', $post)
                <form action="/posts/{{ $post->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="" onclick="return confirm('¿Deseas eliminar este post?')">Eliminar</button>
                </form>
            @endcan        
        </article>
        <h4>Comentarios</h4>
        <div>
            @foreach ($comments as $comment)
                <div>
                    <div>
                        {{ $comment->comment }}
                    </div>
                    <small>
                        {{ $comment->name }}
                    </small>
                    <hr>
                </div>
            @endforeach
        </div>
        <div class="container-form">
            <form action="/posts/{{ $post->id }}/comments" method="POST" class="form-post">
                <h2>Escribe un comentario</h2>
                
                @csrf
        
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="name">
                    @error('name')
                        <div class="text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Comentario</label>
                    <textarea name="comment" id="" cols="30" rows="10"></textarea>
                    @error('comment')
                        <div class="text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit">Guardar</button>
            </form>
    </div>
</x-dynamic-component>