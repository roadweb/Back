@extends('pages.app')

@section('content')



    <div class="container">
    	<!-- développé par Céline : page "nos métiers" -->
    	<div class="rw-jobs-index-container">
      
    		<h1>Les Métiers du Web</h1>
        	<p>
        	   Sur Road-Web, nous vous proposons notre vision du web à travers nos différents métiers. 
        		Retrouvez ici les fiches descriptives des différents métiers que regroupe la création dans 
        		le monde du digital et du numérique. Et n’oubliez pas que chaque métier existe grâce aux
        		autres !
    	    </p>
            <div class="rw-jobs-index-container-flex">
                @foreach($jobs as $job)
        		<div id="rw-jobs-index-{{$job->id}}" class="rw-jobs-index rw-job-color-{{$job->id}}">
    	    		<div class="rw-jobs-index-icon">
    	    			<img src="{{ asset($job->job_icon) }} "/>
    	    		</div>
                    <div class="rw-jobs-index-description-{{$job->id}}">
                        <h1 class="rw-job-color-txt-{{$job->id}}">{{$job->name}}</h1>
                        <p>{{$job->resume}}
                        </p>

                        <div  class="rw-jobs-index-fiche-{{$job->id}} rw-jobs-hide">
                            <div class="rw-jobs-index-fiche-content-balises">
                                {!!$job->content!!}
                            </div>
                        </div>

                        <a href="#rw-jobs-index-{{$job->id}}">           <button class="rw-jobs-click-view-{{$job->id}} rw-job-color-txt-{{$job->id}}">
               <i class="fa fa-angle-down"></i>
           </button></a>

    	    		</div>

    	    		<div class="rw-jobs-index-triangle rw-job-color-triangle-{{$job->id}}"></div>
        		</div>
                @endforeach

            </div>
    	</div>
    </div>

@stop