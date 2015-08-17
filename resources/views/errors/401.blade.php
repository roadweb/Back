@extends('pages.app')

@section('content')

<div class="container">
    <div class="rw-error-401-container">

    	<p>Désolé, nous ne sommes pas en mesure d'afficher la <span class="rw-error-red">page demandée</span> :(</p>
    	<p class="rw-error-explication">L'adresse mail et/ou le mot de passe fourni lors de l'authentification est <span class="rw-error-red">incorrect</span>.
	</div>
</div>

@stop