    <!-- développé par Céline : index de la home / bloc "derniers articles" -->

<section class="rw-index-last-articles-container">
    <h1>Derniers articles du blog</h1>
    <div class="rw-index-last-articles-container-flex">
        <article class="rw-index-last-article">
            <h1>Titre de l'article blabla blabla blabla blablabla test</h1>
            <img src="{{ asset('images/last_article_test.jpg')}}" alt="" />
            <p>description de l'article</p>
        </article>
        <article class="rw-index-last-article">
            <h1>Titre de l'article blabla blabla blabla blablabla test</h1>
            <img src="{{ asset('images/last_article_test.jpg')}}" alt="" />
            <p>description de l'article</p>
        </article>
        <article class="rw-index-last-article">
            <h1>Titre de l'article blabla blabla blabla blablabla test</h1>
            <img src="{{ asset('images/last_article_test.jpg')}}" alt="" />
            <p>description de l'article blabla blabla blabla blabla blabla test</p>
        </article>
    </div>
</section>

@include('pages.components.last-articles-min')