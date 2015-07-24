@extends('pages.app')

@section('content')

    <div class="rw-main-container-articleon">

        <div class="rw-blog-article-container rw-job-color-{{$post->job_id}}">
            <div class="rw-blog-article-content-fct rw-job-color-bgc-{{$post->job_id}}">

                    <span>
                        <i class="fa fa-clock-o"></i> $temps
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
                        <i class="fa fa-font"></i>
                        <i class="fa fa-font"></i>
                        <i class="fa fa-print"></i>
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


                <!----todo-popix L'image sera récupérée dans la BDD ==> penser à inclure dans le CMS l'ajout de l'image d'illustration!!!! ---->

                <img src="{{$post->img_link}}" alt="{{ $post->img_alt }}"/>

                <p> {!! $post->content !!} </p>

                <p class="rw-blog-article-content-auth rw-job-color-txt-{{$post->job_id}}"> {{ $post->user->username }}</p>

            </div>


            <div class="rw-blog-article-comment">

                <div class="rw-blog-article-comment-nbr">

                    <!---------------------todo-popix Le nombre de commentaire devra être récupéré dans la base de données ----------------------->
                    <p class="rw-blog-article-comment-nbr-red">3</p>

                    <!---------------------todo-popix
                     Faire un script pour le pluriel du mot commentaire!!
                        si 0 ou 1 ==> singulier
                        si 2 ou + ==> pluriel
                    ----------------------->
                    <p>commentaires</p>

                    <div class="rw-blog-article-comment-arrow"></div>

                </div>


                <div class="rw-blog-article-comment-cmt">

                    <div class="rw-blog-article-comment-cmt-ord">

                        <!----todo-popix avatar dans bdd idem pour chaque coms---->
                        <img src="http://lorempixel.com/60/60/people/1/" alt="avatar"/>

                        <!----todo-popix date commentaire dans bdd idem pour chaque coms---->
                        <p>15 janvier 2015 14h39</p>

                        <!----todo-popix contenu du commentaire dans bdd idem pour chaque coms---->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    </div>

                    <div class="rw-blog-article-comment-cmt">

                        <div class="rw-blog-article-comment-cmt-ord">

                            <!---- avatar dans bdd, peut être autre façon de récupérer img?---->
                            <img src="http://lorempixel.com/60/60/people/9/" alt="avatar"/>

                            <!---- date commentaire dans bdd---->
                            <p>15 janvier 2015 20h16</p>

                            <!---- contenu du commentaire dans bdd---->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                        </div>

                        <div class="rw-blog-article-comment-cmt">

                            <div class="rw-blog-article-comment-cmt-ord">

                                <!---- avatar dans bdd---->
                                <img src="http://lorempixel.com/60/60/people/1/" alt="avatar"/>

                                <!---- date commentaire dans bdd---->
                                <p>16 janvier 2015 08h49</p>

                                <!---- contenu du commentaire dans bdd---->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            </div>

                        </div>

                    </div>


                </div>
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
                    <img src="{{ asset('images/avatar-base.png')}}" alt="avatar"/>
                </div>

                <p>Un mot sur l'auteur..Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis inventore minus mollitia neque omnis
                    praesentium quis {{ $post->user->bio }}</p>


                <div class="rw-blog-band-auth-rsx">
                    <img src="{{ asset('images/reseaux-icon/facebook.png')}}" alt="Facebook"/>
                    <img src="{{ asset('images/reseaux-icon/linkedin.png')}}" alt="Linkedin"/>
                    <img src="{{ asset('images/reseaux-icon/twitter.png')}}" alt="Twitter"/>
                    <img src="{{ asset('images/reseaux-icon/google-plus.png')}}" alt="Twitter"/>
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

                        <img src="{{asset('images/html5.png')}}" alt="html5"/>
                        <img src="{{asset('images/css3.png')}}" alt="css3"/>

                    </div>

                    <div class="rw-bdc-triangle rw-job-color-triangle-{{$userPost->job_id}}">
                    </div>

                </div>

            @endforeach
            <div class="rw-blog-band-others-sameAuth">
                <a class="rw-blog-band-others-sameAuth-all-articles" href="monblog/{{$post->user->id}}">Tous les articles de <span>{{$post->user->username}}</span>
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

                        <img src="{{asset('images/photoshop.png')}}" alt="photoshop"/>


                    </div>
                    <div class="rw-bdc-triangle rw-job-color-triangle-{{$jobPost->job_id}}"></div>


                </div>
            @endforeach

            <hr/>

            <div class="rw-blog-band-auth">
                <h3><a href="">Article à la une</a></h3>
            </div>

            <div class="rw-blog-band-others-Une rw-blog-article-Une-design">

                <div class="rw-blog-band-others-Une-illus">

                    <!----todo-popix  L'image sera récupérée dans la bdd---->

                    <img src="{{asset('images/blog1.png')}}" alt="Photoshop et CSS"/>

                </div>


                <div class="rw-blog-band-others-Une-header">

                    <!----todo-popix  Le titre sera récupéré dans la bdd---->
                    <h3> Depuis Photoshop directement en CSS </h3>

                </div>


            </div>

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


@stop
