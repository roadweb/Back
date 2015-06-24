@extends('pages.app')

@section('content')
    @include('pages.components.header')

    <!---------------------
 développé par Pauline: Inscription : validation d'inscription
----------------------->


<div class="rw-sub-container">

    <div class="rw-sub-header rw-subvalid-header">
       <h1>Félicitations <span>Nom du membre</span>, nous t'invitons à profiter de nos avantages. </h1>
        <h2>A tout de suite.</h2>

    </div>


    <div class="rw-sub-advantages">

        <div class="rw-sub-advantages-zone">

            <h3>Une Communauté active</h3>

            <img src="{{asset('images/picto-avantage1.png')}}" alt="icône communauté"/>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab aliquam aperiam, beatae blanditiis cumque deleniti dolor enim illum mollitia natus numquam, omnis rerum sint, soluta tempore ullam veniam voluptas.
            </p>

        </div>

        <div class="rw-sub-advantages-zone">

            <h3>Un complément d'apprentissage</h3>

            <img src="{{asset('images/picto-avantage2.png')}}" alt="icône apprentissage"/>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab aliquam aperiam, beatae blanditiis cumque deleniti dolor enim illum mollitia natus numquam, omnis rerum sint, soluta tempore ullam veniam voluptas.
            </p>

        </div>

        <div class="rw-sub-advantages-zone">

            <h3>Des contenus exclusifs</h3>

            <img src="{{asset('images/picto-avantage3.png')}}" alt="icône contenu"/>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab aliquam aperiam, beatae blanditiis cumque deleniti dolor enim illum mollitia natus numquam, omnis rerum sint, soluta tempore ullam veniam voluptas.
            </p>

        </div>

    </div>


</div>

    @include('pages.components.footer')

@stop