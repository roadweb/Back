<section class="rw-index-last-articles-container">
    <h1>Derniers articles du blog</h1>
    <div class="rw-index-last-articles-container-flex">
       @if(count($posts) > 0)
            @foreach($posts as $post)
            <a href="blog/{{ $post->id }}/{{urlBeautify($post->title)}}">
                <article class="rw-index-last-article" style="background: url('{{$post->img_link}}') no-repeat center center scroll; background-size: 300px;">
                    <h1>{{ str_limit($post->title, $limit = 33, $end = '...') }}</h1>
                       <img src="{{$post->img_link}}" alt="{{$post->img_alt}}" />
                    <p>{{ str_limit($post->resume, $limit = 70, $end = '...') }}</p>
                </article>
            </a>
            @endforeach
        @else
            <span>
                Aucun article n'a encore été publié dans ce domaine
            </span>
        @endif
    </div>
</section>
