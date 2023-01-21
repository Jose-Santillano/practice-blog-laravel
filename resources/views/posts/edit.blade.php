<x-dynamic-component
    :component="Auth::check() ? 'appLayout' : 'guestLayout'"
>
    <x-slot name="header">Editar post</x-slot>
    <div class="container-form">
        <form action="/posts/{{ $post->id }}" method="POST" class="form-post">
            <h2>Editar post</h2>
            
            @csrf
            @method('PATCH')
    
            <div class="form-group">
                <label for="">Título</label>
                <input type="text" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="">Resumen</label>
                <textarea name="excerpt" id="" cols="30" rows="10">{{ $post->excerpt }}</textarea>
            </div>
            <div class="form-group">
                <label for="">Contenido</label>
                <textarea name="content" id="" cols="30" rows="10">{{ $post->content }}</textarea>
            </div>
            <div class="form-group">
                <button>Actualizar</button>
            </div>           
        </form>
        <a href="/posts/{{ $post->id }}">Cancelar</a>
    </div>
</x-dynamic-component>