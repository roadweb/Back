<div class="rw-blog-jf">

	<div class="rw-blog-jf-hexagone not_mobile">
    </div>

    @foreach ($jobs as $job)
        <div class="rw-blog-jf-navbar-job" id="rw-blog-jf-job-{{$job->id}}"
        	{{--onClick="myLine({{$job->id}})"--}}
            {{--onMouseOver="myLine({{$job->id}})"--}}
            {{--onMouseOut="myLine(7)"--}}>

            <a href="{{URL::to('/blog?jobid=')}}{{$job->id}}">

                <img src="{{ asset($job->job_icon)}}" alt=""/>
            </a>

            <div class="rw-blog-jf-navbar-job-label not_mobile">
                <span class="not_mobile">{{$job->name}}</span>
                <div class="rw-blog-jf-navbar-vertical-line not_mobile "></div>
                <img class="rw-blog-jf-icon-exagone not_mobile" src="images/exagone-rouge.png"/>
            </div>

        </div>
    @endforeach

    <div class="rw-blog-jf-line not_mobile">
    </div>

    <div class="rw-blog-jf-hexagone not_mobile" id="rw-blog-jf-hexagone-end">
    </div>

</div>