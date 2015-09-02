@extends('pages.app')

@section('content')
    @include('pages.components.header')
    <img class="rw-fond-exagone-top" src="{{ asset('images/exagonefond.png')}}"/>


    <div class="rw-main-container-articleon">

        <div class="rw-blog-article-container rw-job-color-{{$post->job_id}}">
           <div class="rw-blog-article-content-fct rw-job-color-bgc-{{$post->job_id}}">

                    <span>
                        {{--<i class="fa fa-clock-o"></i>--}}
                    </span>

                <span>
                    <p>
                        Partagez !
                    </p>
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-google-plus"></i>
                        <i class="fa fa-linkedin"></i>
                </span>

                    <span>
                        <i id="rw-blog-fct-plus" class="fa fa-font"></i>
                        <i id="rw-blog-fct-moins" class="fa fa-font"></i>
                        {{--<i class="fa fa-print"></i>--}}
                    </span>

            </div>
            <div class="rw-blog-article-header">

                <div class="rw-blog-article-header-date">
                    <p class="rw-blog-article-header-date-red">{{$post->created_at->format('d')}}</p>

                    <p>{{dateConvert($post->created_at->format('F'))}}</p>

                    <p>{{ $post->created_at->format('Y') }}</p>
                </div>


                <h3> {{ $post->title }}</h3>


            </div>

            <div class="rw-blog-article-content">



                <img src="{{$post->img_link}}" alt="{{ $post->ref_thumb }}"/>

                <p> {!! $post->content !!} </p>

                <p class="rw-blog-article-content-auth rw-job-color-txt-{{$post->job_id}}"> {{ $post->user->username }}</p>

            </div>


            <div class="rw-blog-article-comment">

                <div id="disqus_thread"></div>
                <script type="text/javascript">
                    /* * * CONFIGURATION VARIABLES * * */
                    var disqus_shortname = 'roadweb';

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function() {
                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>


                <div class="rw-bdc-triangle rw-job-color-triangle-{{$post->job_id}}"></div>
            </div>
        </div>



        <!---------------------
     Partie droite de la page : bio auteur + autres articles même auteur + autre article même métier + mis en avant
    ----------------------->

        <div class="rw-blog-band-container">

            <div class="rw-blog-band-auth">
                <h3><a href=""><span>{{$post->user->first_name}} {{$post->user->last_name}}</span> alias <span>{{$post->user->username}}</span></a></h3>

                <div class="rw-blog-band-auth-avatar">
                    <img src="{{ asset( $post->user->avatar )}}" alt="avatar"/>
                </div>

                <p>{{ $post->user->bio }}</p>


                <div class="rw-blog-band-auth-rsx">
                    @if(($post->user->facebook) != '')
                        <a href="{{$post->user->facebook}}" target="_blank">
                            <img src="{{ asset('images/reseaux-icon/facebook.png')}}" alt="Facebook" title="Facebook {{$post->user->username}}"/>
                        </a>
                    @else
                    @endif
                    @if(($post->user->linkedin) != '')
                        <a href="{{$post->user->linkedin}}" target="_blank">
                            <img src="{{ asset('images/reseaux-icon/linkedin.png')}}" alt="Linkedin" title="Linkedin {{$post->user->username}}"/>
                        </a>
                    @else
                    @endif
                    @if(($post->user->twitter) != '')
                        <a href="{{$post->user->twitter}}" target="_blank">
                            <img src="{{ asset('images/reseaux-icon/twitter.png')}}" alt="Twitter" title="Twitter {{$post->user->username}}"/>
                        </a>
                    @else
                    @endif
                    @if(($post->user->googleplus) != '')
                        <a href="{{$post->user->googleplus}}" target="_blank">
                            <img src="{{ asset('images/reseaux-icon/google-plus.png')}}" alt="Google plus" title="Google+ {{$post->user->username}}"/>
                        </a>
                    @else
                    @endif
                    @if(($post->user->pinterest) != '')
                        <a href="{{$post->user->pinterest}}" target="_blank">
                            <img src="{{ asset('images/reseaux-icon/pinterest.png')}}" alt="Pinterest" title="Pinterest {{$post->user->username}}"/>
                        </a>
                    @else
                    @endif
                    @if(($post->user->behance) != '')
                        <a href="{{$post->user->behance}}" target="_blank">
                            <img src="{{ asset('images/reseaux-icon/behance.png')}}" alt="Behance" title="Behance {{$post->user->username}}"/>
                        </a>
                    @else
                    @endif
                    @if(($post->user->youtube) != '')
                        <a href="{{$post->user->youtube}}" target="_blank">
                            <img src="{{ asset('images/reseaux-icon/youtube.png')}}" alt="Youtube" title="Youtube {{$post->user->username}}"/>
                        </a>
                    @else
                    @endif
                    @if(($post->user->viadeo) != '')
                        <a href="{{$post->user->viadeo}}" target="_blank">
                            <img src="{{ asset('images/reseaux-icon/viadeo.png')}}" alt="Viadeo" title="Viadeo {{$post->user->username}}"/>
                        </a>
                    @else
                    @endif
                    @if(($post->user->instagram) != '')
                        <a href="{{$post->user->instagram}}" target="_blank">
                            <img src="{{ asset('images/reseaux-icon/instagram.png')}}" alt="Instagram" title="Instagram {{$post->user->username}}"/>
                        </a>
                    @else
                    @endif
                </div>
            </div>
            <hr/>

            <div class="rw-blog-band-auth">
                <h3>Autres articles de <span>{{$post->user->username}}</span></h3>
            </div>


            @foreach($userPosts as $userPost)

                <div class="rw-blog-band-others-sameAuth rw-job-color-{{$userPost->job_id}}">
                    <div class="rw-blog-band-others-sameAuth-header">

                        <div class="rw-blog-band-others-sameAuth-header-date">
                            <p class="rw-blog-band-others-sameAuth-header-date-red">
                                {{$userPost->created_at->format('d')}}
                            </p>

                            <p>
                                {{ dateConvert($userPost->created_at->format('F')) }}
                            </p>

                            <p>
                                {{ $userPost->created_at->format('Y') }}
                            </p>
                        </div>
                        <h3>
                            <a href="{{ $userPost->id }}">
                                {{ str_limit($userPost->title, $limit = 57, $end = '...') }}
                            </a>
                        </h3>

                    </div>

                    <div class="rw-blog-band-others-sameAuth-header-picto">

                        <img src="{{asset($userPost->techno->img_link)}}" alt="html5"/>

                    </div>

                    <div class="rw-bdc-triangle rw-job-color-triangle-{{$userPost->job_id}}">
                    </div>

                </div>

            @endforeach
            <div class="rw-blog-band-others-sameAuth">
                <a class="rw-blog-band-others-sameAuth-all-articles" href="{{URL::to('/monblog', ['id' => $post->user->id, 'username' => $post->user->username])}}">Tous les articles de <span>{{$post->user->username}}

                    </span>
                </a>

            </div>

            <hr/>

            <div class="rw-blog-band-auth">
                <h3><a href="">Autres articles <span>{{$post->job->name}}</span></a></h3>
            </div>
            @foreach($jobPosts as $jobPost)
                <div class="rw-blog-band-others-sameAuth rw-job-color-{{$jobPost->job_id}}">

                    <div class="rw-blog-band-others-sameAuth-header">

                        <div class="rw-blog-band-others-sameAuth-header-date">
                            <p class="rw-blog-band-others-sameAuth-header-date-red">
                                {{$jobPost->created_at->format('d')}}
                            </p>

                            <p>
                                {{ dateConvert($jobPost->created_at->format('F')) }}
                            </p>

                            <p>
                                {{$jobPost->created_at->format('Y')}}
                            </p>
                        </div>
                        <h3>
                            <a href="{{$jobPost->id}}">
                                {{ str_limit($jobPost->title, $limit = 57, $end = '...') }}
                            </a>
                        </h3>

                    </div>

                    <div class="rw-blog-band-others-sameAuth-header-picto">

                        <img src="{{asset( $jobPost->techno->img_link)}}" alt="photoshop"/>


                    </div>
                    <div class="rw-bdc-triangle rw-job-color-triangle-{{$jobPost->job_id}}"></div>


                </div>
            @endforeach

            <hr/>

            <div class="rw-blog-band-auth">
                <h3><a href="">Article à la une</a></h3>
            </div>
            @foreach($postSticky as $postStic)

            <div class="rw-blog-band-others-Une rw-blog-article-Une-design">
                <a href="{{$postStic->id}}">
                <div class="rw-blog-band-others-Une-illus">

                    <img src="{{ $postStic->img_link }}" alt="{{ $postStic->img_alt }}"/>

                </div>


                <div class="rw-blog-band-others-Une-header">

                    <h3> {{ $postStic->title }} </h3>

                </div>
                </a>

            </div>

            @endforeach
            <div class="rw-blog-band-auth">
                <h3><a href="">Partager l'article</a></h3>
            </div>

            <div class="rw-blog-band-rsx">
                <img src="{{asset('images/reseaux-icon/linkedin.png')}}" alt="Linkedin"/>
                <img src="{{asset('images/reseaux-icon/twitter.png')}}" alt="Twietter"/>
                <img src="{{asset('images/reseaux-icon/facebook.png')}}" alt="Facebook"/>
                <img src="{{asset('images/reseaux-icon/pinterest.png')}}" alt="Pinterest"/>
                <img src="{{asset('images/reseaux-icon/google-plus.png')}}" alt="google +"/>
                <img src="{{asset('images/reseaux-icon/behance.png')}}" alt="behance"/>
            </div>


        </div>

    </div>

    @include('pages.components.footer')

@stop
