<!-- dev: mathieu -->
<div class="rw-carrous">




    <div  class="rw-carrous-body">

        <ul class="bxslider rw-carrous-body">

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
                            {{ $job->job_description }}
                            Le webmarketer est la personne en charge de la création et de l’augmentation de trafic sur un site Web. Il doit mettre en place une stratégie regroupant différentes actions pour augmenter la
                            <button class="rw-job-color-txt-{{$job->id}}">
                                <i class="fa fa-hand-o-right"></i> Lire la suite
                            </button>
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