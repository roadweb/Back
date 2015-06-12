<!---------------------
 développé par Pauline: article blog ouvert
----------------------->
@extends('pages.app')

@section('content')

<div class="rw-blog-article-container">

    <div class="rw-blog-article-header">

        <!---- attention la date devra être récupéré dans la bdd de manière scindée: jour / mois / année ==> séparés---->
        <div class="rw-blog-article-header-date">
            <p class="rw-blog-article-header-date-red">12</p>
            <p>janvier</p>
            <p>2015</p>
        </div>


        <!---- Le titre sera récupéré dans la bdd---->
        <h3> Que ce soit du print ou du digital comment aborder le langage couleur avec votre prestataire.</h3>


    </div>

    <div class="rw-blog-article-content">

        <!---- L'image sera récupérée dans la BDD ==> penser à inclure dans le CMS l'ajout de l'image d'illustration!!!! ---->

        <img src="http://lorempixel.com/1227/405/abstract/7/" alt="chromatides"/>

        <!---------------------
         Ici le contenu de l'article. J'ai mis des <p> pour l'instant mais éventuellement mettre une div complète?
        ----------------------->
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae culpa cumque dolorem eaque.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus ad culpa ea et eveniet, ex explicabo facilis in ipsum laudantium modi molestias natus omnis quia, quo temporibus vel veniam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, atque consequatur cupiditate deleniti ea exercitationem expedita hic id illo iusto labore laborum molestias odit perspiciatis porro provident ratione velit voluptas!
        </p>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias consectetur cum cumque deserunt dolorem, eum id minima nisi nostrum odit, quam repudiandae sed sequi similique vel voluptas! Neque, nesciunt!
        </p>

        <!---- auteur devra être récupéré dans la BDD ---->
        <h4>Auteur</h4>

    </div>

    <div>

    <div class="rw-blog-article-comment">

        <div class="rw-blog-article-comment-nbr">

            <!--------------------- Le nombre de commentaire devra être récupéré dans la base de données ----------------------->
            <p class="rw-blog-article-comment-nbr-red">3</p>

            <!---------------------
             Faire un script pour le pluriel du mot commentaire!!
                si 0 ou 1 ==> singulier
                si 2 ou + ==> pluriel
            ----------------------->
            <p>commentaires</p>

            <div class="rw-blog-article-comment-arrow"></div>

        </div>


        <div class="rw-blog-article-comment-cmt">

            <div class="rw-blog-article-comment-cmt-ord">
                <!---------------------
                 Partie améliorée par rapport au design de la maquette.. A l'origine pas de date ni d'avatar. A voir!
                ----------------------->

                <!---- avatar dans bdd---->
                <img src="http://lorempixel.com/60/60/people/1/" alt="avatar"/>

                <!---- date commentaires dans bdd---->
                <p>15 janvier 2015 14h39</p>

                <!---- contenu du commentaire dans bdd---->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

            </div>

        <div class="rw-blog-article-comment-cmt">

            <div class="rw-blog-article-comment-cmt-ord">
                <!---------------------
                 Partie améliorée par rapport au design de la maquette.. A l'origine pas de date ni d'avatar. A voir!
                ----------------------->

                <!---- avatar dans bdd, peut être autre façon de récupérer img?---->
                <img src="http://lorempixel.com/60/60/people/9/" alt="avatar"/>

                <!---- date commentaires dans bdd---->
                <p>15 janvier 2015 20h16</p>

                <!---- contenu du commentaire dans bdd---->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

            </div>

        <div class="rw-blog-article-comment-cmt">

            <div class="rw-blog-article-comment-cmt-ord">
                <!---------------------
                 Partie améliorée par rapport au design de la maquette.. A l'origine pas de date ni d'avatar. A voir!
                ----------------------->

                <!---- avatar dans bdd---->
                <img src="http://lorempixel.com/60/60/people/1/" alt="avatar"/>

                <!---- date commentaires dans bdd---->
                <p>16 janvier 2015 08h49</p>

                <!---- contenu du commentaire dans bdd---->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

            </div>

        </div>

    </div>


    </div>


  <!--  <div class="rw-blog-article-container-arrow"></div>-->
</div>


@stop