<!-- dev: mathieu -->

<div class="rw-carrous-nav"> <!-- PREVOIR L'ENREGISTREMENT DANS LA BDD TABLE "JOB" -->

    

    <div class="rw-carrous-navbar">     
        <div class="rw-carrous-navbar-extremite"></div>    
            @foreach ($jobs as $job)
                <div class="rw-carrous-navbar-job">

                    <a class="rw-carrous-navbar-job-a" 
                       href="#" onclick="myLine({{$job->id}})" 
                       onmouseover="myLine({{$job->id}})" 
                       onmouseout="myLine(7)">  

                        <img class="rw-icon-job" 
                             src="{{ asset($job->job_icon)}}" alt=""/> 
                    </a>

                    <div class="rw-carrous-navbar-job-label">
                        <span>{{$job->name}}</span>  
                        <div class="rw-navbar-vertical-line"></div>
                        <img class="rw-icon-exagone" src="images/exagone-rouge.png"/>
                    </div>

                </div>
            @endforeach
        <div class="rw-carrous-navbar-extremite"></div>
    </div>
    
    
    <div class="rw-carrous-navbar-path">
        <img class="rw-icon-exagone-first" src="{{ asset('images/exagone-rouge.png')}}"/>
        @for ($i = 1; $i <= 7; $i++)
            <div class="rw-carrous-navbar-line-{{$i}}"  ></div>
        @endfor
        <img class="rw-icon-exagone-last" src="{{ asset('images/exagone-rouge.png')}}"/>
    </div>


</div>
