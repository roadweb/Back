@extends('pages.app')

@section('content')
    @include('pages.components.header')

    <!---------------------
 développé par Pauline: Inscription : creation de compte
----------------------->

    <div class="rw-sub-container">

        <div class="rw-sub-header">
            <h1>Bienvenue sur le site de <span>Road-Web</span></h1>

            <h2>Tu veux faire partie de la communauté? <br/>
                Incris toi vite.</h2>

        </div>

        <div class="rw-sub-content">
            <form action="" method="">

                <fieldset>
                    <input type="text" name="nom" placeholder="Nom"/>
                    <input type="text" name="prenom" placeholder="Prénom"/>
                </fieldset>

                <fieldset>
                    <input type="text" name="pseudo" placeholder="Pseudonyme"/>
                    <input type="email" name="mail" placeholder="Adresse mail"/>
                </fieldset>


                <fieldset>
                    <input type="password" name="password" placeholder="Mot de passe"/>
                    <input type="password" name="password" placeholder="Confirmation de mot de passe"/>
                </fieldset>

                <fieldset>

                    <input class="rw-sub-checkbox" type="checkbox" name="Emweb" value="Emweb"/>Je suis ou j'ai été élève
                    de l'EmWeb.

                    <!---------------------
                     upload de fichier uniquement si checkbox élèves EmWeb sélectionnée
                    ----------------------->
                    <input class="rw-sub-upload" type="file" name="champsFichier" id="champsFichier"><br>


                </fieldset>
                <!---------------------
                 validation du formulaire
                ----------------------->

                <button>Valider</button>


            </form>


        </div>

        <div class="rw-sub-advantages">

            <div class="rw-sub-advantages-zone">

                <h3>Une Communauté active</h3>

                <img src="{{asset('images/picto-avantage1.png')}}" alt="icône communauté"/>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab aliquam aperiam, beatae blanditiis
                    cumque deleniti dolor enim illum mollitia natus numquam, omnis rerum sint, soluta tempore ullam
                    veniam voluptas.
                </p>

            </div>

            <div class="rw-sub-advantages-zone">

                <h3>Un complément d'apprentissage</h3>

                <img src="{{asset('images/picto-avantage2.png')}}" alt="icône apprentissage"/>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab aliquam aperiam, beatae blanditiis
                    cumque deleniti dolor enim illum mollitia natus numquam, omnis rerum sint, soluta tempore ullam
                    veniam voluptas.
                </p>

            </div>

            <div class="rw-sub-advantages-zone">

                <h3>Des contenus exclusifs</h3>

                <img src="{{asset('images/picto-avantage3.png')}}" alt="icône contenu"/>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab aliquam aperiam, beatae blanditiis
                    cumque deleniti dolor enim illum mollitia natus numquam, omnis rerum sint, soluta tempore ullam
                    veniam voluptas.
                </p>

            </div>

        </div>


    </div>

    @include('pages.components.footer')

@stop