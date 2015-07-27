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

            <a href="#" onfocus="myFunction({{$job->id}})" onactive="myFunction({{$job->id}})">  {{-- voir 'addlistener' --}}
                <img class="rw-icon-job" src="{{ asset($job->job_icon)}}" alt=""/> {{-- necessite l'integration des chemin image dans la table job --}}
            </a>
            <div class="rw-carrous-navbar-job-label">
                <span>{{$job->name}}</span>  
                <div class="rw-navbar-vertical-line"></div>
                <img class="rw-icon-exagone" src="images/exagone-rouge.png"/>
            </div>

        </div>
        
    @endforeach
        
        
        
        
    
        
        
        
        
        
        
        
        
            
        <div class="rw-carrous-navbar-job">

            <a href="#" onfocus="myFunction()" onactive="myFunction()">  {{-- voir 'addlistener' --}}
                <img class="rw-icon-job" src="{{ asset('images/jobs-icon/referencement.png')}}" alt=""/>
            </a>
            <div class="rw-carrous-navbar-job-label">
                <span>Référencement</span>  
                <div class="rw-navbar-vertical-line"></div>
                <img class="rw-icon-exagone" src="images/exagone-rouge.png"/>
            </div>

        </div>

        <div class="rw-carrous-navbar-job">

            <a href="#">
                <img class="rw-icon-job" src="{{ asset('images/jobs-icon/developpement.png')}}" alt=""/>
            </a>
            <div class="rw-carrous-navbar-job-label">
                <span>Développement</span>
                <div class="rw-navbar-vertical-line"></div>
                <img class="rw-icon-exagone" src="images/exagone-rouge.png"/>
            </div>

        </div>
        
        
        <div class="rw-carrous-navbar-job">

            <a href="#">
                <img class="rw-icon-job" src="{{ asset('images/jobs-icon/webdesign.png')}}" alt=""/>
            </a>
            <div class="rw-carrous-navbar-job-label">
                <span>Webdesign</span>
                <div class="rw-navbar-vertical-line"></div>
                <img class="rw-icon-exagone" src="images/exagone-rouge.png"/>
            </div>

        </div>
        
        
        <div class="rw-carrous-navbar-job">
            <a href="#">
                <img class="rw-icon-job" src="{{ asset('images/jobs-icon/webmarketing.png')}}" alt=""/>
            </a>
            <div class="rw-carrous-navbar-job-label">
                <span>Marketing</span>
                <div class="rw-navbar-vertical-line"></div>
                <img class="rw-icon-exagone" src="images/exagone-rouge.png"/>
            </div>
            
        </div>
        
        
        <div class="rw-carrous-navbar-job">
            <a href="#">
                <img class="rw-icon-job" src="{{ asset('images/jobs-icon/cm.png')}}" alt=""/>
            </a>
            <div class="rw-carrous-navbar-job-label">
                <span>Community management</span>
                <div class="rw-navbar-vertical-line"></div>
                <img class="rw-icon-exagone" src="images/exagone-rouge.png"/>
            </div>
            
        </div>

        
        <div class="rw-carrous-navbar-job">
            <a href="#">
                <img class="rw-icon-job" src="{{ asset('images/jobs-icon/integration.png')}}" alt=""/>
            </a>
            <div class="rw-carrous-navbar-job-label">
                <span>Intégration</span>
                <div class="rw-navbar-vertical-line"></div>
                <img class="rw-icon-exagone" src="images/exagone-rouge.png"/>
            </div>
                
        </div>

        
    </div>
    <div class="rw-carrous-navbar-path">
        <img class="rw-icon-exagone-first" src="{{ asset('images/exagone-rouge.png')}}"/>
        <div class="rw-carrous-navbar-line"  ></div>
    </div>
</div>
