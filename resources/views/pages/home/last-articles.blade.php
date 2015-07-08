<section class="rw-index-last-articles-container">
    <h1>Derniers articles du blog</h1>
    <div class="rw-index-last-articles-container-flex">
        @foreach($posts as $post)
            <article class="rw-index-last-article">
                <h1>{{ $post->title }}</h1>
                <img src="{{ asset('images/last_article_test.jpg')}}" alt="" />
                <p>{{ $post->resume }}</p>
            </article>
        @endforeach
    </div>
</section>

@include('pages.components.last-articles-min')