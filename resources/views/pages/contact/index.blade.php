@extends('pages.app')

@section('content')

<div class="container">
    <div class="rw-contact-container">

        <h1>Nous contacter</h1>

        <p>Un souci, une demande, des suggestions ? N'hésitez pas à remplir le formulaire ci-dessous et à nous le faire parvenir ! Nous vous recontacterons par mail au plus vite et ferons notre possible pour régler votre problème :) </p>

    <h2>Formulaire de contact </h2>

    <form action="" method="">

        <fieldset class="rw-sub-checkbox">

            <div class="rw-contact-field">
                <label for="prenom">Prénom : </label>
                <input type="text" name="prenom" placeholder="Votre prénom" required/>
           </div>

            <div class="rw-contact-field">
                <label for="nom">Nom : </label>
                <input type="text" name="nom" placeholder="Votre Nom" required/>
            </div>

            <div class="rw-contact-field">
                <label for="mail">Adresse mail : </label>
                <input type="email" name="mail" placeholder="votremail@mail.fr" required />
            </div>

            <div class="rw-contact-field">
                <label for="objet">Objet de votre email :</label>
                <select name="objet" size="1">
                    <optgroup label="Site web"> 
                        <option>Je veux signaler un bug</option>
                        <option>Je veux signaler un bug</option>
                        <option>Je veux signaler un bug</option>
                    </optgroup>
                    <optgroup label="Blog"> 
                        <option>????</option>
                        <option>????</option>
                        <option>????</option>
                    </optgroup>
                    <optgroup label="Association"> 
                        <option>????</option>
                        <option>????</option>
                        <option>????</option>
                    </optgroup>
                    <optgroup label="Autre"> 
                        <option>Autre</option>
                    </optgroup>
                </select>
            </div>

            <div class="rw-contact-field">
                <label for="message">Message : </label>
                <textarea name="message" placeholder="Entrez votre message" required /></textarea>
            </div>

            <div class="rw-contact-field">
                <label for="url">Url de la page concernée : </label>
                <input type="url" name="url" placeholder="Copiez-collez l'url de la page concernée" />
            </div>

            <div class="rw-sub-input-file-container">
                <p>Capture d'écran :</p>
                <div>
                    <label for="my-file" class="rw-sub-input-file-trigger" tabindex="0">Joindre une image...</label>
                    <input class="rw-sub-input-file" id="my-file" type="file">
                     <p class="rw-sub-file-return"></p>
                </div>
            </div>

            <div class="rw-contact-field">
                <input type="checkbox" name="copie" />
                <label for="copie">
                    <span class="ui"></span>
                    Je désire recevoir une copie de mon message par email</label>
            </div>

            <button name="envoyer">Envoyer</button>

        </fieldset>

    </form>

    </div>
</div>

@stop