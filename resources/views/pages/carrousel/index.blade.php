<!-- dev: mathieu -->
<div class="rw-carrous">




    <div  class="rw-carrous-body">

        <ul class="bxslider rw-carrous-body">
            @foreach($jobs as $job)

                <li class="rw-carrous-body-content">
                    <img class="rw-carrous-body-content-article-screen" src="{{ $job->slide_img }}"/>

                    <div class="rw-carrous-body-content-article">
                        <h1 class="rw-carrous-body-content-article-text-h1 rw-job-color-txt-{{$job->id}}"> {{$job->name}}</h1>
                        <p class="rw-carrous-body-content-article-text-p">
                            {{ $job->job_description }}
                            Le webmarketer est la personne en charge de la création et de l’augmentation de trafic sur un site Web. Il doit mettre en place une stratégie regroupant différentes actions pour augmenter la fréquentation du site et/ou ses ventes. Il analyse ses actions via des reportings réguliers sur les différentes campagnes qu’il a menées.
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