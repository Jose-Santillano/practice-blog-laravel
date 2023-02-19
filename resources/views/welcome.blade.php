<x-dynamic-component 
    :component="Auth::check() ? 'appLayout' : 'guestLayout'" 
    :title="'Bienvenido'"
>
    <!--
    <x-slot name="header">Bievenido a los posts {{ Auth::user()->name }}</x-slot>
    -->
    <div class="container mx-auto">
        <div class="text-center pt-8">
            <h2>Últimos posts</h2>
        </div>
        <div class="flex flex-col items-center justify-center">
            @foreach ($posts as $post)
                <article class="min-w-min w-96  p-6">
                    <div class="bg-gray-300 rounded-t-xl">
                        <h2 class="font-black text-2xl p-7"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2> 
                    </div>
                    <div class="bg-gray-200 rounded-b-xl">
                        <p class="text-lg p-7">{{ $post->excerpt }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-dynamic-component>