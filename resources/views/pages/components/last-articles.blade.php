<section class="rw-index-last-articles-container">
    <h1>Derniers articles du blog</h1>
    <div class="rw-index-last-articles-container-flex">
        @foreach($posts as $post)
        <a href="blog/{{ $post->id }}">
            <article class="rw-index-last-article">
                <h1>{{ $post->title }}</h1>
                <img src="{{ $post->img_link }}" alt="" />
                <p>{{ $post->resume }}</p>
            </article>
        </a>
        @endforeach
    </div>
</section>
