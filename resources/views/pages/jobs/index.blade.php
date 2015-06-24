@extends('pages.app')

@section('content')

    @include('pages.components.header')

    <div class="container">

    	<!-- développé par Céline : page "nos métiers" -->
    	<div class="rw-jobs-index-container">
      
    		<h1>Les Métiers du Web</h1>

    		<p>
    			Sur Roadweb, nous vous proposons notre vision du web à travers les différents métiers...
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction 
	    		blablabla je suis un texte d'introduction
	    	</p>

    		<div class="rw-jobs-index-webmarketing">
	    		<div class="rw-jobs-index-icon">
	    			<img src="{{ asset('images/webmarketing.png') }} "/>
	    		</div>
    			<div class="rw-jobs-index-description">
    				<h1>Webmarketing</h1>
    				<p>Issu du métier de graphiste, le webdesigner conçoit le site web du point de vue visuel mais aussi ergonomique... <a href="#" alt="">- lire la suite</a></p>
	    		</div>
	    		<div class="rw-jobs-index-triangle"></div>
    		</div>
    		<div class="rw-jobs-index-developpement">
	    		<div class="rw-jobs-index-icon">
	    			<img src="{{ asset('images/developpement.png') }} "/>
	    		</div>
    			<div class="rw-jobs-index-description">
    				<h1>Développement</h1>
    				<p>Issu du métier de graphiste, le webdesigner conçoit le site web du point de vue visuel mais aussi ergonomique... <a href="#" alt="">- lire la suite</a></p>
	    		</div>
	    		<div class="rw-jobs-index-triangle"></div>
    		</div>

    		<div class="rw-jobs-index-webdesign">
	    		<div class="rw-jobs-index-icon">
	    			<img src="{{ asset('images/webdesign.png') }} "/>
	    		</div>
    			<div class="rw-jobs-index-description">
    				<h1>Webdesign</h1>
    				<p>Issu du métier de graphiste, le webdesigner conçoit le site web du point de vue visuel mais aussi ergonomique... <a href="#" alt="">- lire la suite</a></p>
	    		</div>
	    		<div class="rw-jobs-index-triangle"></div>
    		</div>
    		<div class="rw-jobs-index-referencement">
	    		<div class="rw-jobs-index-icon">
	    			<img src="{{ asset('images/referencement.png') }} "/>
	    		</div>
    			<div class="rw-jobs-index-description">
    				<h1>Référencement</h1>
    				<p>Issu du métier de graphiste, le webdesigner conçoit le site web du point de vue visuel mais aussi ergonomique... <a href="#" alt="">- lire la suite</a></p>
	    		</div>
	    		<div class="rw-jobs-index-triangle"></div>
    		</div>

    		<div class="rw-jobs-index-integration">	
	    		<div class="rw-jobs-index-icon">
	    			<img src="{{ asset('images/integration.png') }} "/>
	    		</div>
    			<div class="rw-jobs-index-description">
    				<h1>Intégration</h1>
    				<p>Issu du métier de graphiste, le webdesigner conçoit le site web du point de vue visuel mais aussi ergonomique... <a href="#" alt="">- lire la suite</a></p>
	    		</div>
	    		<div class="rw-jobs-index-triangle"></div>
    		</div>
    		<div class="rw-jobs-index-community-management">
	    		<div class="rw-jobs-index-icon">
	    			<img src="{{ asset('images/cm.png') }} "/>
	    		</div>
    			<div class="rw-jobs-index-description">
    				<h1>Community Management</h1>
    				<p>Issu du métier de graphiste, le webdesigner conçoit le site web du point de vue visuel mais aussi ergonomique... <a href="#" alt="">- lire la suite</a></p>
	    		</div>
	    		<div class="rw-jobs-index-triangle"></div>
    		</div>

    	</div>

    </div>

    @include('pages.components.footer')

@stop