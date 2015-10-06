<!-- dev: mathieu -->
<div class="rw-carrous not_mobile">




    <div  class="rw-carrous-body">

        <ul class="bxslider rw-carrous-body">

            <li class="rw-carrous-body-content">
                <a href="http://road-web.fr/blog/10/S%E2%80%99installer-en-freelance,-mode-d%E2%80%99emploi"><img class="rw-carrous-body-content-article-slide-img" src="http://i.imgur.com/lGr2hi1.jpg"/></a>

            </li>
            <li class="rw-carrous-body-content">
                <a href="http://www.road-web.fr/blog/8"><img class="rw-carrous-body-content-article-slide-img" src="{{asset('images/road-web-welcome.jpg') }}"/></a>

            </li>

            <li class="rw-carrous-body-content">
                <img class="rw-carrous-body-content-article-screen" src="{{asset('images/ecran_slide/ecran-metiers.png') }}"/>

                <div class="rw-carrous-body-content-article">
                    <h1 class="rw-carrous-body-content-article-text-h1 rw-job-color-txt-2"> Les métiers du web</h1>
                    <p class="rw-carrous-body-content-article-text-p">
                        Road-Web est un site communautaire rassemblant des élèves et des professionnels débutants dans les métiers du web.
                    </p>
                </div>

            </li>

        @foreach($jobs as $job)

                <li class="rw-carrous-body-content">
                    <img class="rw-carrous-body-content-article-screen" src="{{ $job->slide_img }}"/>

                    <div class="rw-carrous-body-content-article">
                        <h1 class="rw-carrous-body-content-article-text-h1 rw-job-color-txt-{{$job->id}}"> {{$job->name}}</h1>
                        <p class="rw-carrous-body-content-article-text-p">
                            {{ $job->resume}}
                            <a href="{{url('/jobs')}}#rw-jobs-index-{{$job->id}}">
                                <button class="rw-job-color-txt-{{$job->id}}">
                                    <i class="fa fa-hand-o-right"></i> Lire la suite
                                </button>
                            </a>
                        </p>
                    </div>

                </li>
            @endforeach

        </ul>

    </div>

   <!-- <button id="go-prev">
        <i class="fa fa-angle-left"></i>
    </button>
    <button id="go-next">
        <i class="fa fa-angle-right"></i>
    </button>-->


</div>