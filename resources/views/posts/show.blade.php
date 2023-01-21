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
    </div>
</x-dynamic-component>