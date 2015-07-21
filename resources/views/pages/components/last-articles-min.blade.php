<section class="rw-index-open-articles-container-min">
  @foreach ($vignettes as $vignette)
    <article class="rw-index-open-article-min">
        <div class="rw-index-open-article-min-date">
            <p>
                <span class="rw-index-day">12</span>
                <br />
                Janvier
                <br />
                2015
            </p>
        </div>
        <div class="rw-index-open-article-min-link rw-job-color-{{ $vignette->job_id }}">
            <div class="rw-index-open-article-min-title">
            	<a href="#">{{ $vignette->title }} </a>
            </div>
            <div class="rw-index-open-article-min-icons">
            	<img src="{{ asset('images/icon_blog_test_1.jpg') }}" />	
           	</div>
        </div>
        <div class="rw-index-open-article-min-triangle rw-job-color-triangle-{{ $vignette->job_id }}"></div>
    </article>
   @endforeach
</section>