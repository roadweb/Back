<section class="rw-index-open-articles-container-min">
    @foreach( $vignettes as $vignette)

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
        <div class="rw-index-open-article-min-link">
            <div class="rw-index-open-article-min-title">

                <a href="#"> {!! str_limit('{{$titleResume=$vignette->title}}', 37); !!}</a>

            </div>
            <div class="rw-index-open-article-min-icons">
            	<img src="{{ asset('images/icon_blog_test_1.jpg') }}" />	
           	</div>
        </div>
        <div class="rw-index-open-article-min-triangle"></div>
    </article>
@endforeach

</section>