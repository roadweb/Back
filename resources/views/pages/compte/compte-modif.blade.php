@extends('pages.app')

@section('content')



        <div class="rw-cpt-main-container">
            <div class="rw-cpt-header">
                
                <h1>Compte de <span>$username</span></h1>
                                
            </div>
            
            <div class="rw-cpt-content">

                <div class="rw-cpt-content-profil">

                    <h2>Profil
                        <span>
                            <i class="fa fa-edit"></i>
                        </span>
                    </h2>

                    <form action="#">

                        <fieldset>

                            <div class="rw-cpt-content-profil-field">

                                <label for="prenom">Prénom : </label>
                                <input type="text" name="prenom" placeholder="Martin"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="nom">Nom : </label>
                                <input type="text" name="nom" placeholder="Duvent"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="username">Pseudo : </label>
                                <input type="text" name="username" placeholder="Martin D"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="birth">Date de naissance : </label>
                                <input type="date" name="birth" placeholder="01/05/1979"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="email">Email : </label>
                                <input type="email" name="email" placeholder="mduvent@monmail.com"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="localite">Localité : </label>
                                <input type="text" name="localite" placeholder="Deauville"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="profession">Profession : </label>
                                <input type="text" name="profession" placeholder="infographiste"/>

                            </div>


                            <div class="rw-cpt-content-profil-field">

                                <label for="siteweb">Site Web : </label>
                                <input type="url" name="siteweb" placeholder="www.monsupersite.fr"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="skype">Skype : </label>
                                <input type="text" name="skype" placeholder="duvendoux"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="facebook">Facebook : </label>
                                <input type="url" name="facebook" placeholder="http://facebook.com/monfacebook"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="twitter">Twitter : </label>
                                <input type="text" name="twitter" placeholder="@duvendoux"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="pinterest">Pinterest : </label>
                                <input type="url" name="pinterest" placeholder="http://pinterest.com/monpinterest"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="behance">Behance : </label>
                                <input type="url" name="behance" placeholder="http://behance.com/monbehance"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="linkedin">Linkedin : </label>
                                <input type="url" name="linkedin" placeholder="http://linkedin.com/monlinkedin"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="viadeo">Viadeo : </label>
                                <input type="url" name="viadeo" placeholder="http://viadeo.com/monviadeo"/>

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

                        <img src="http://lorempixel.com/200/200/people/9/" alt="Avatar"/>

                        <div class="rw-cpt-content-legend">

                            <span>
                                <i class="fa fa-edit"></i>
                            </span>
                            <span>
                                <i class="fa fa-trash-o"></i>
                            </span>

                        </div>


                    </div>

                    <div class="rw-cpt-content-infos">
                        <h2>Informations personnelles
                        <span>
                            <i class="fa fa-edit"></i>
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
                        </span>
                    </h2>

                    <form action="#">

                        <fieldset>

                            <textarea name="bio" id="bio" cols="30" rows="10">  Décrivez ici votre parcours ou votre métier -- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dicta dolore esse eveniet iste nesciunt ratione reprehenderit vitae! Consequuntur facilis impedit magni non suscipit? Excepturi labore nisi quaerat quidem quod!</textarea>
                        </fieldset>
                    </form>

                </div>


                <div class="rw-cpt-content-profil">

                    <div class="rw-cpt-content-compet">

                        <h2>Mes compétences
                            <span>
                                <i class="fa fa-edit"></i>
                            </span>
                        </h2>
                        <!---------------------
 attention dans CSS taille de bar définie
----------------------->
                        <div class="rw-cpt-progress-bar-container">
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
                        </div>

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