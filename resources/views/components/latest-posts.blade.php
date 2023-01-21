<div>
    <div>
        <h3>Posts recientes</h3>
        <ul>
            @foreach ($posts as $post)
                <li><a href="/post/{{ $post->id }}">{{ $post->title }}</a></li>
            @endforeach     
        </ul>
    </div>
</div>