<x-dynamic-component 
    :component="Auth::check() ? 'appLayout' : 'guestLayout'" 
    :title="'Bienvenidos'"
>
    <x-slot name="header">Bienvenidos</x-slot>
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
</x-dynamic-component>