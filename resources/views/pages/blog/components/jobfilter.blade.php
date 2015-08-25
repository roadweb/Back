<div class="rw-blog-jf">

	<div class="rw-blog-jf-hexagone">
    </div>
  
    @foreach ($jobs as $job)
        <div class="rw-blog-jf-navbar-job"
        	onClick="myLine({{$job->id}})" 
            onMouseOver="myLine({{$job->id}})"
            onMouseOut="myLine(7)">

            <a href="#">  
                <img src="{{ asset($job->job_icon)}}" alt=""/> 
            </a>

            <div class="rw-blog-jf-navbar-job-label">
                <span>{{$job->name}}</span>  
                <div class="rw-blog-jf-navbar-vertical-line"></div>
                <img class="rw-icon-exagone" src="images/exagone-rouge.png"/>
            </div>

        </div>
    @endforeach

    <div class="rw-blog-jf-line">
    </div>

    <div class="rw-blog-jf-hexagone">
    </div>

</div>