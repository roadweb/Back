@extends('pages.app')

@section('content')

    <div class="rw-cpt-main-container">
        <div class="rw-cpt-header">

            <h1>Compte de <span>$username</span></h1>

        </div>

        <div class="rw-cpt-content">

            <div class="rw-cpt-content-profil">
                <!---------------------
les input de cette partie sont bloqués en mode visualisation et débloqué en mode modification. Une modification est sauvegarder au clic sur le i fa-save et les données sont mises à jour dans la bdd

         les checkbox apparaissent
----------------------->
                <h2>Profil
                        <span><!-- ajouter la class rw-hide pour masquer l'un ou l'autre icone-->
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-save"></i>
                        </span>
                </h2>

                <form action="#">

                    <fieldset class="rw-cpt-checkbox">
                        <div class="rw-cpt-content-profil-field rw-cpt-content-profil-field-allvisible">

                            <p>Masquer / Afficher tous les items</p>

                            <p>
                                <input type="checkbox" id="visibleall"/>
                                <label for="visibleall">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>


                        <div class="rw-cpt-content-profil-field">

                            <label for="prenom">Prénom : </label>
                            <input type="text" name="prenom" placeholder="Martin"/>

                            <p>
                                <input type="checkbox" id="visibleprenom"/>
                                <label for="visibleprenom">
                                    <span class="ui"></span>visible
                                </label>
                            </p>
                        </div>

                        <div class="rw-cpt-content-profil-field">

                            <label for="nom">Nom : </label>
                            <input type="text" name="nom" placeholder="Duvent"/>

                            <p>
                                <input type="checkbox" id="visiblenom"/>
                                <label for="visiblenom">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>

                        <div class="rw-cpt-content-profil-field">

                            <label for="username">Pseudo : </label>
                            <input type="text" name="username" placeholder="Martin D"/>

                            <p>
                                <input type="checkbox" id="visibleusername"/>
                                <label for="visibleusername">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>

                        <div class="rw-cpt-content-profil-field">

                            <label for="birth">Date de naissance : </label>
                            <input type="date" name="birth" placeholder="01/05/1979"/>

                            <p>
                                <input type="checkbox" id="visiblebirth"/>
                                <label for="visiblebirth">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>

                        <div class="rw-cpt-content-profil-field">

                            <label for="email">Email : </label>
                            <input type="email" name="email" placeholder="mduvent@monmail.com"/>

                            <p>
                                <input type="checkbox" id="visibleemail"/>
                                <label for="visibleemail">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>

                        <div class="rw-cpt-content-profil-field">

                            <label for="localite">Localité : </label>
                            <input type="text" name="localite" placeholder="Deauville"/>

                            <p>
                                <input type="checkbox" id="visiblelocalite"/>
                                <label for="visiblelocalite">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>

                        <div class="rw-cpt-content-profil-field">

                            <label for="formation">formations : </label>
                            <input type="text" name="formation" placeholder="développeur"/>

                            <p>
                                <input type="checkbox" id="visibleformation"/>
                                <label for="visibleformation">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>


                        <div class="rw-cpt-content-profil-field">

                            <label for="siteweb">Site Web : </label>
                            <input type="url" name="siteweb" placeholder="www.monsupersite.fr"/>

                            <p>
                                <input type="checkbox" id="visiblesiteweb"/>
                                <label for="visiblesiteweb">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>

                        <div class="rw-cpt-content-profil-field">

                            <label for="skype">Skype : </label>
                            <input type="text" name="skype" placeholder="duvendoux"/>

                            <p>
                                <input type="checkbox" id="visibleskype"/>
                                <label for="visibleskype">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>

                        <div class="rw-cpt-content-profil-field">

                            <label for="facebook">Facebook : </label>
                            <input type="url" name="facebook" placeholder="http://facebook.com/monfacebook"/>

                            <p>
                                <input type="checkbox" id="visiblefacebook"/>
                                <label for="visiblefacebook">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>

                        <div class="rw-cpt-content-profil-field">

                            <label for="twitter">Twitter : </label>
                            <input type="text" name="twitter" placeholder="@duvendoux"/>

                            <p>
                                <input type="checkbox" id="visibletwitter"/>
                                <label for="visibletwitter">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>

                        <div class="rw-cpt-content-profil-field">

                            <label for="pinterest">Pinterest : </label>
                            <input type="url" name="pinterest" placeholder="http://pinterest.com/monpinterest"/>

                            <p>
                                <input type="checkbox" id="visiblepint"/>
                                <label for="visiblepint">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>

                        <div class="rw-cpt-content-profil-field">

                            <label for="behance">Behance : </label>
                            <input type="url" name="behance" placeholder="http://behance.com/monbehance"/>

                            <p>
                                <input type="checkbox" id="visiblebehance"/>
                                <label for="visiblebehance">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>

                        <div class="rw-cpt-content-profil-field">

                            <label for="linkedin">Linkedin : </label>
                            <input type="url" name="linkedin" placeholder="http://linkedin.com/monlinkedin"/>

                            <p>
                                <input type="checkbox" id="visiblelinked"/>
                                <label for="visiblelinked">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>

                        <div class="rw-cpt-content-profil-field">

                            <label for="viadeo">Viadeo : </label>
                            <input type="url" name="viadeo" placeholder="http://viadeo.com/monviadeo"/>

                            <p>
                                <input type="checkbox" id="visibleviadeo"/>
                                <label for="visibleviadeo">
                                    <span class="ui"></span>visible
                                </label>
                            </p>

                        </div>


                    </fieldset>


                </form>

            </div>

            <div class="rw-cpt-content-profil">

                <div class="rw-cpt-content-button">
                    <button>
                        <a href="#">
                            Publier un article
                        </a>
                    </button>

                    <!---------------------
 Display none sur le button 2!
                    ----------------------->
                    <button>
                        <a href="#">
                            Publier mon CV
                        </a>
                    </button>

                </div>

                <div class="rw-cpt-content-avatar">

                    <img src="{{asset('images/avatars/avatar-base.png')}}" alt="Avatar"/>

                    <div class="rw-cpt-content-legend">

                            <span>
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-save"></i>
                            </span>

                        <!---------------------
                         le i fa-trash permet de supprimer la photo de la bdd et de mettre l'avatar de base
                        ----------------------->
                            <span>
                                <i class="fa fa-trash-o"></i>
                            </span>

                    </div>


                </div>

                <div class="rw-cpt-content-infos">
                    <h2>Informations personnelles
                        <span>
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-save"></i>

                        </span>
                    </h2>

                    <form action="#">

                        <fieldset>
                            <div class="rw-cpt-content-profil-field">

                                <label for="contact">Email de contact</label>
                                <input type="email" name="contact" placeholder="monmail@monmail.com"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="passeword">Mot de passe</label>
                                <input type="password" name="passeword" placeholder="********"/>

                            </div>


                            <div class="rw-cpt-content-profil-field">

                                <label for="dateInscrit">Date d'inscription</label>
                                <input type="date" name="dateInscrit" placeholder="12/06/2015"/>

                            </div>


                            <div class="rw-cpt-content-profil-field">

                                <label for="adresseBlog">Mon blog road-web</label>
                                <input type="url" name="dateInscrit" placeholder="http://road-web.fr/monBlog"/>
                                <span class="rw-cpt-content-profil-field-share">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-google-plus"></i>
                                    <i class="fa fa-linkedin"></i>
                                </span>

                            </div>


                            <div class="rw-cpt-content-profil-field">

                                <label for="abonnement">Abonnement</label>
                                <input type="text" name="abonnement" placeholder="EMWeb"/>

                            </div>

                        </fieldset>

                    </form>

                </div>

            </div>


            <div class="rw-cpt-content-profil">
                <h2>Un mot sur moi
                        <span>
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-save"></i>

                        </span>
                </h2>

                <form action="#">

                    <fieldset>

                        <textarea name="bio" id="bio" cols="30" rows="10">  Décrivez ici votre parcours ou votre métier -- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dicta dolore esse eveniet iste nesciunt ratione reprehenderit vitae! Consequuntur facilis impedit magni non suscipit? Excepturi labore nisi quaerat quidem quod!</textarea>
                    </fieldset>
                </form>

            </div>


            <!--       <div class="rw-cpt-content-profil">

                       <div class="rw-cpt-content-compet">

                           <h2>Mes compétences
                               <span>
                               <i class="fa fa-edit"></i>
                               <i class="fa fa-save"></i>

                               </span>
                           </h2>-->
            <!---------------------
attention dans CSS taille de bar définie
----------------------->
            <!--<div class="rw-cpt-progress-bar-container">
                <div class="rw-cpt-progress-bar">
                    <div class="rw-cpt-bar"> HTML</div>
                </div>
                <div class="rw-cpt-progress-bar">
                    <div class="rw-cpt-bar">JavaScript</div>
                </div>
                <div class="rw-cpt-progress-bar">
                    <div class="rw-cpt-bar">SEO/SEM</div>
                </div>
                <div class="rw-cpt-progress-bar">
                    <div class="rw-cpt-bar">Wordpress</div>
                </div>
            </div>-->

        </div>
    </div>

    <!---------------------
fin content
----------------------->
    </div>

    <!---------------------
     fin container main
    ----------------------->
    </div>



@stop