<!-- dev: mathieu -->

<div class="rw-carrous-nav"> <!-- PREVOIR L'ENREGISTREMENT DANS LA BDD TABLE "JOB" -->

    

    <div class="rw-carrous-navbar">     

<!--
        <div class="rw-carrous-navbar-path">
            <div class="rw-carrous-navbar-line"></div>
            <div class="rw-carrous-navbar-line"></div>
            <div class="rw-carrous-navbar-line"></div>
            <div class="rw-carrous-navbar-line"></div>
            <div class="rw-carrous-navbar-line"></div>
            <div class="rw-carrous-navbar-line"></div>
        </div>
-->
        

            
            
    @foreach ($jobs as $job)
   
        <div class="rw-carrous-navbar-job">
            <a class="rw-carrous-navbar-job-a" href="#" onclick="myLine({{$job->id}})" onmouseover="myLine({{$job->id}})" onmouseout="myLine(7)">  {{-- voir 'addlistener' --}}
                <img class="rw-icon-job" src="{{ asset($job->job_icon)}}" alt=""/> {{-- necessite l'integration des chemin image dans la table job --}}
            </a>
            <div class="rw-carrous-navbar-job-label">
                <span>{{$job->name}}</span>  
                <div class="rw-navbar-vertical-line"></div>
                <img class="rw-icon-exagone" src="images/exagone-rouge.png"/>
            </div>
        </div>
        
    @endforeach
               
    </div>
    <div class="rw-carrous-navbar-path">
        <img class="rw-icon-exagone-first" src="{{ asset('images/exagone-rouge.png')}}"/>
        <div class="rw-carrous-navbar-line"  ></div>
    </div>
</div>
