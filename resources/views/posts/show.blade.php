<x-layout :title="$post->title">
    <div class="container-posts">
        <article class="content-post">
            <h1>
                {{ $post->title }}
            </h1>
            <p>
                {{ $post->content }}
            </p>
            <a href="/">Inicio</a>
            <a href="/posts/{{ $post->id }}/edit">Editar</a>
            <form action="/posts/{{ $post->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="" onclick="return confirm('¿Deseas eliminar este post?')">Eliminar</button>
            </form>
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
</x-layout>