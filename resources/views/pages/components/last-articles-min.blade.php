<section class="rw-index-open-articles-container-min">
  @foreach ($vignettes as $vignette)
    <article class="rw-index-open-article-min">
        <div class="rw-index-open-article-min-date">
            <p>
                <span class="rw-index-day">{{ $vignette->created_at->format('d') }}</span>
                <br />
                {{ dateConvert($vignette->created_at->format('F')) }}
                <br />
                {{ $vignette->created_at->format('Y') }}
            </p>
        </div>
        <div class="rw-index-open-article-min-link rw-job-color-{{ $vignette->job_id }}">
            <div class="rw-index-open-article-min-title">

                <a href="blog/{{ $vignette->id }}/{{urlBeautify($vignette->title)}}" >{{ str_limit($vignette->title, $limit = 37, $end = '...') }}</a>

            </div>
            <div class="rw-index-open-article-min-icons">
            	<img src="{{ asset( $vignette->techno1->img_link ) }}" />
                @if ($vignette->techno2 != null)
                <img src="{{ asset( $vignette->techno2->img_link ) }}" />
                @endif
                @if ($vignette->techno3 != null)
                <img src="{{ asset( $vignette->techno3->img_link ) }}" />
                @endif

           	</div>
        </div>
        <div class="rw-index-open-article-min-triangle rw-job-color-triangle-{{ $vignette->job_id }}"></div>
    </article>
   @endforeach
</section>