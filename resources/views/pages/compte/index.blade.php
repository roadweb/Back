@extends('pages.app')

@section('content')



        <div class="rw-cpt-main-container">
            <div class="rw-cpt-header">
                
                <h1>Gestion de compte de <span>$username</span></h1>
                                
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
                                <input type="text" name="prenom"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="name">Nom : </label>
                                <input type="text" name="name"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="username">Pseudo : </label>
                                <input type="text" name="username"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="birth">Date de naissance : </label>
                                <input type="date" name="birth"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="email">Email : </label>
                                <input type="email" name="email"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="localite">Localité : </label>
                                <input type="text" name="localite"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="profession">Profession : </label>
                                <input type="text" name="profession"/>

                            </div>


                            <div class="rw-cpt-content-profil-field">

                                <label for="siteweb">Site Web : </label>
                                <input type="url" name="siteweb"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="skype">Skype : </label>
                                <input type="text" name="skype"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="facebook">Facebook : </label>
                                <input type="url" name="facebook" placeholder="http://facebook.com/monfacebook"/>

                            </div>

                            <div class="rw-cpt-content-profil-field">

                                <label for="twitter">Twitter : </label>
                                <input type="text" name="twitter" placeholder="@"/>

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

                    <h2>Un mot sur moi
                        <span>
                            <i class="fa fa-edit"></i>
                        </span>
                    </h2>

                    <form action="#">

                        <fieldset>

                        <textarea name="bio" id="bio" cols="30" rows="10">  Décrivez ici votre parcours ou votre métier</textarea>
                    </fieldset>
                    </form>
                </div>


                <div class="rw-cpt-content-profil">

                    <div class="rw-cpt-content-avatar">

                        <img src="http://lorempixel.com/200/200/people/1/" alt="Avatar"/>

                        <div class="rw-cpt-content-legend">

                            <p>
                                <i class="fa fa-edit"></i>
                            </p>
                            <p>
                                <i class="fa fa-trash-o"></i>
                            </p>

                        </div>


                    </div>

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