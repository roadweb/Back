<section class="rw-index-last-articles-container">
    <h1>Derniers articles du blog</h1>
    <div class="rw-index-last-articles-container-flex">
        @foreach($posts as $post)
        <a href="blog/{{ $post->id }}">
            <article class="rw-index-last-article">
                <h1>{{ substr($post->title,0, 70) }}[...]</h1>
                <img src="http://lorempixel.com/200/200/technics/{{$post->job_id}}/" alt="{{$post->img_alt}}" />
                <p>{{ substr($post->resume,0,70) }}[...]</p>
            </article>
        </a>
        @endforeach
    </div>
</section>
