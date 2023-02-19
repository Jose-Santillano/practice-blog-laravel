<x-app-layout>
    <x-slot name="header">Crear nuevo post</x-slot>
    <div class="container-form">
        <form action="/posts" method="POST" class="form-post">
            <h2>Crear post</h2>
            
            @csrf
    
            <div class="form-group">
                <label for="">Título</label>
                <input type="text" name="title" value="{{ old('title') }}">
                @error('enderrortitle')
                    <div class="text-red-500 text-xs">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Resumen</label>
                <textarea name="excerpt" id="" cols="30" rows="10">{{ old('excerpt') }}</textarea>
                @error('excerpt')
                    <div class="text-red-500 text-xs">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Contenido</label>
                <textarea name="content" id="" cols="30" rows="10">{{ old('content') }}</textarea>
                @error('content')
                    <div class="text-red-500 text-xs">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <button>Guardar</button>
            </div>           
        </form>
    </div>
</x-app-layout>