@extends('pages.app')

@section('content')


    <div class="rw-main-container-articleon">

        <!--
     développé par Pauline: article blog ouvert-->

        <div class="rw-blog-article-container rw-blog-article-brd-design">
            <div class="rw-blog-article-content-fct">

                    <span>
                        Temps de lecture moyen de l'article $temps
                    </span>

                <span>
                <span>
                    Partagez !
                </span>
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

                <!---- todo-popix attention la date devra être récupérée dans la bdd de manière scindée: jour / mois / année ==> séparés---->
                <div class="rw-blog-article-header-date">
                    <p class="rw-blog-article-header-date-red">12</p>

                    <p>janvier</p>

                    <p>2015</p>
                </div>


                <!----todo-popix Le titre sera récupéré dans la bdd---->
                <h3> Que ce soit du print ou du digital comment aborder le langage couleur avec votre prestataire.</h3>


            </div>

            <div class="rw-blog-article-content">


                <!----todo-popix L'image sera récupérée dans la BDD ==> penser à inclure dans le CMS l'ajout de l'image d'illustration!!!! ---->

                <img src="http://lorempixel.com/1227/405/abstract/7/" alt="chromatides"/>

                <!---------------------
                todo-popix VOTRE AVIS:Ici le contenu de l'article. J'ai mis des <p> pour l'instant mais éventuellement mettre une div complète?
                ----------------------->
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae culpa cumque dolorem eaque.
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus ad culpa ea et eveniet, ex
                    explicabo facilis in ipsum laudantium modi molestias natus omnis quia, quo temporibus vel veniam! Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, atque consequatur cupiditate deleniti
                    ea exercitationem expedita hic id illo iusto labore laborum molestias odit perspiciatis porro provident
                    ratione velit voluptas!
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias consectetur cum cumque deserunt
                    dolorem, eum id minima nisi nostrum odit, quam repudiandae sed sequi similique vel voluptas! Neque,
                    nesciunt!
                </p>

                <!----todo-popix auteur devra être récupéré dans la BDD ---->
                <h4>Auteur</h4>

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


                <div class="rw-bdc-triangle-design"></div>
            </div>
        </div>



            <!---------------------
         Partie droite de la page : bio auteur + autres articles même auteur + autre article même métier + mis en avant
        ----------------------->

        <div class="rw-blog-band-container">

        <div class="rw-blog-band-auth">
            <h3><a href="">Autres sujets de Prénom Nom</a></h3>

            <div class="rw-blog-band-auth-avatar">
                <img src="http://lorempixel.com/100/100/people/1" alt="avatar"/>
            </div>

            <p>Un mot sur l'auteur..Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis inventore minus mollitia neque omnis
                praesentium quis</p>


            <div class="rw-blog-band-auth-rsx">
                <img src="{{ asset('images/reseaux-icon/facebook.png')}}" alt="Facebook"/>
                <img src="{{ asset('images/reseaux-icon/linkedin.png')}}" alt="Linkedin"/>
                <img src="{{ asset('images/reseaux-icon/twitter.png')}}" alt="Twitter"/>
                <img src="{{ asset('images/reseaux-icon/google-plus.png')}}" alt="Twitter"/>
            </div>
        </div>

        <div class="rw-blog-band-others-sameAuth rw-blog-article-brd-inte">

            <div class="rw-blog-band-others-sameAuth-header">

                <!----todo-popix attention la date devra être récupérée dans la bdd de manière scindée: jour / mois / année ==> séparés---->
                <div class="rw-blog-band-others-sameAuth-header-date">
                    <p class="rw-blog-band-others-sameAuth-header-date-red">09</p>

                    <p>janvier</p>

                    <p>2015</p>
                </div>
                <!----todo-popix  Le titre sera récupéré dans la bdd---->
                <h3> Que ce soit du print ou du digital comment aborder ...</h3>

            </div>

            <div class="rw-blog-band-others-sameAuth-header-picto">

                <img src="{{asset('images/html5.png')}}" alt="html5"/>
                <img src="{{asset('images/css3.png')}}" alt="css3"/>

            </div>

            <div class="rw-bdc-triangle-inte"></div>

        </div>

        <div class="rw-blog-band-others-sameAuth rw-blog-article-brd-design">

            <div class="rw-blog-band-others-sameAuth-header">

                <!----todo-popix  attention la date devra être récupérée dans la bdd de manière scindée: jour / mois / année ==> séparés---->
                <div class="rw-blog-band-others-sameAuth-header-date">
                    <p class="rw-blog-band-others-sameAuth-header-date-red">19</p>

                    <p>mars</p>

                    <p>2015</p>
                </div>
                <!----todo-popix  Le titre sera récupéré dans la bdd---->
                <h3> Changer son thème Wordpress</h3>

            </div>

            <div class="rw-blog-band-others-sameAuth-header-picto">

                <img src="{{asset('images/wordpress.png')}}" alt="wordpress"/>


            </div>

            <div class="rw-bdc-triangle-design"></div>

        </div>

        <div class="rw-blog-band-auth">
            <h3><a href="">Article du même métier</a></h3>
        </div>
        <div class="rw-blog-band-others-sameAuth rw-blog-article-brd-design">

            <div class="rw-blog-band-others-sameAuth-header">

                <!----todo-popix  attention la date devra être récupérée dans la bdd de manière scindée: jour / mois / année ==> séparés---->
                <div class="rw-blog-band-others-sameAuth-header-date">
                    <p class="rw-blog-band-others-sameAuth-header-date-red">12</p>

                    <p>février</p>

                    <p>2015</p>
                </div>
                <!----todo-popix  Le titre sera récupéré dans la bdd---->
                <h3> Nos secrets sur Photoshop avec 3 exemples à l'appui</h3>

            </div>

            <div class="rw-blog-band-others-sameAuth-header-picto">

                <img src="{{asset('images/photoshop.png')}}" alt="photoshop"/>


            </div>
            <div class="rw-bdc-triangle-design"></div>


        </div>
        <div class="rw-blog-band-others-sameAuth rw-blog-article-brd-design">

            <div class="rw-blog-band-others-sameAuth-header">

                <!----todo-popix  attention la date devra être récupérée dans la bdd de manière scindée: jour / mois / année ==> séparés---->
                <div class="rw-blog-band-others-sameAuth-header-date">
                    <p class="rw-blog-band-others-sameAuth-header-date-red">12</p>

                    <p>février</p>

                    <p>2015</p>
                </div>
                <!----todo-popix  Le titre sera récupéré dans la bdd---->
                <h3> Nos secrets sur Photoshop avec 3 exemples à l'appui</h3>

            </div>

            <div class="rw-blog-band-others-sameAuth-header-picto">

                <img src="{{asset('images/photoshop.png')}}" alt="photoshop"/>


            </div>

            <div class="rw-bdc-triangle-design"></div>

        </div>

        <div class="rw-blog-band-auth">
            <h3><a href="">Voir tous les articles</a></h3>
        </div>

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
