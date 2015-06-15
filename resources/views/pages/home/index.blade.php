@extends('pages.app')

@section('content')
    <header class="rw-header_container">
        <div class="rw-header_top">
            <p>
                <img class="rw-logo" alt="logo hexagonal roadweb" src="{{asset('images/logo.png')}}">
            </p>

<<<<<<< HEAD
    <section class="rw-index-last-articles-container">

	<h1>Derniers articles du blog</h1>

	<article class="rw-index-last-article">
		<h1>Titre de l'article</h1>
		<img src="" alt="">
		<p>description de l'article</p>
	</article>
	<article class="rw-index-last-article">
		<h1>Titre de l'article</h1>
		<img src="" alt="">
		<p>description de l'article</p>
	</article>
	<article class="rw-index-last-article">
		<h1>Titre de l'article</h1>
		<img src="" alt="">
		<p>description de l'article</p>
	</article>

</section>

<section class="rw-index-open-articles-container">
	<article class="rw-index-open-article">
		<h1>Tutoriels</h1>
		<div class="rw-index-open-article-tuto">
			<img src="" alt="">
			<div class="rw-index-open-article-date">
				<p><font class="rw-index-day">12</font><br>
			Janvier<br> 2015</p>
		</div>
			<p>titre de l'article</p>
		</div>
	</article>
	<article class="rw-index-open-article">
		<h1>Codothèque</h1>
		<div class="rw-index-open-article-tuto">
			<img src="" alt="">
			<div class="rw-index-open-article-date">
				<p><font class="rw-index-day">12</font><br>
			Janvier<br> 2015</p>
		</div>
			<p>titre de l'article</p>
		</div>
	</article>
	<article class="rw-index-open-article">
		<h1>Outils</h1>
		<div class="rw-index-open-article-tuto">
			<img src="" alt="">
			<div class="rw-index-open-article-date">
				<p><font class="rw-index-day">12</font><br>
			Janvier <br>2015</p>
		</div>
			<p>titre de l'article</p>
		</div>
	</article>
</section>

<section class="rw-index-open-articles-container-min">
	<article class="rw-index-open-article-min">
		<div class="rw-index-article-min-date">
			<p><font class="rw-index-day">12</font><br>
			Janvier <br>2015</p>
		</div>
		<div class="rw-index-article-min-link">
			<a href="#">Nom de l'article - lire l'article</a>
		</div>
</article>
	<article class="rw-index-open-article-min">
		<div class="rw-index-article-min-date">
			<p><font class="rw-index-day">12</font><br>
			Janvier <br>2015</p>
		</div>
		<div class="rw-index-article-min-link">
			<a href="#">Nom de l'article - lire l'article</a>
		</div>
	</article>
	<article class="rw-index-open-article-min">
		<div class="rw-index-article-min-date">
			<p><font class="rw-index-day">12</font><br>
			Janvier <br>2015</p>
		</div>
		<div class="rw-index-article-min-link">
			<a href="#">Nom de l'article - lire l'article</a>
		</div>
	</article>
</section>

=======
            <p class="rw-slogan">bienvenue sur <em>roadweb</em>.com</p>
>>>>>>> 9de11d5cabfdb69cad0393ba34a63e029466ff31

            <div class="rw-search">
                <form action="" class="rw-searchbar" method="post">
                    <input name="" type="search" placeholder="Rechercher sur Roadweb.com"/>
                </form>
                <p><img class="rw-loupe" alt="loupe" src="{{asset('images/loupe.png')}}" height="90px"></p>
            </div>
        </div>
        <div class="rw-clear"></div>
        <nav class="rw-nav">
            <ul class="rw-ul_grey">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Tutoriel</a></li>
                <li><a href="#">Exercices</a></li>
                <li><a href="#">Codothèque</a></li>
            </ul>
            <ul class="rw-ul_red">
                <li><a href="#">Cvthèque</a></li>
                <li><a href="#">Connexion</a></li>
            </ul>
        </nav>
    </header>
@stop