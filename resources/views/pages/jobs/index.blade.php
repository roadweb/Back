@extends('pages.app')

@section('content')



    <div class="container">
    	<!-- développé par Céline : page "nos métiers" -->
    	<div class="rw-jobs-index-container">
      
    		<h1>Les Métiers du Web</h1>
        	<p>
        	   Sur Road-Web, nous vous proposons notre vision du web à travers nos différents métiers. 
        		Retrouvez ici les fiches descriptives des différents métiers que regroupe la création dans 
        		le monde du digital et du numérique. Et n’oubliez pas que chaque métier existe grâce aux
        		autres !
    	    </p>
            <div class="rw-jobs-index-container-flex">
                @foreach($jobs as $job)
        		<div class="rw-jobs-index rw-job-color-{{$job->id}}">
    	    		<div class="rw-jobs-index-icon">
    	    			<img src="{{ asset($job->job_icon) }} "/>
    	    		</div>
                    <div class="rw-jobs-index-description">
                        <h1 class="rw-job-color-txt-{{$job->id}}">{{$job->name}}</h1>
                        <p>Issu du métier de graphiste, le webdesigner conçoit le site web du point de vue visuel mais aussi ergonomique...
                        </p>

                        <div class="rw-jobs-index-fiche rw-jobs-hide">
                            <p>
                                Le webmarketer est la personne en charge de la création et de l’augmentation de trafic sur un site Web.
                                Il doit mettre en place une stratégie regroupant différentes actions pour augmenter la fréquentation du site et/ou ses ventes.
                                Il analyse ses actions via des reportings réguliers sur les différentes campagnes qu’il a menées.
                            </p>
                            <h2>Les fonctions du webmarketer</h2>
                            <p>
                                Véritable analyste de la fréquentation du site internet, il travaille en relation avec une équipe webmarketing, en fonction de la taille de l’entreprise. Ses missions sont les suivantes :
                            </p>
                            <ul>
                                <li>- réalisation du cahier des charges en cas de création du site internet (création de contenu, architecture du site, évolutions futures…)</li>
                                <li>- analyse de la concurrence et mise en place d’outils de veille</li>
                                <li>- mise en œuvre des actions de communication offline et oneline du site</li>
                                <li>- promotion et animation du site : envoi de newsletters, achat d’espace publicitaire…</li>
                                <li>- stratégie de référencement naturel et payant pour un positionnement optimal sur les moteurs de recherche.</li>
                                <li>- mise en place de partenariat avec le site : affiliation, échange de liens, liens avec d’autres prestataires…</li>
                                <li>- analyse de l’audience et du trafic du site</li>
                                <li>- suivi des actions de community management (mise en place de jeu-concours, animation des réseaux sociaux)</li>
                            </ul>
                            <h2>Le profil du webmarketer</h2>
                            <h3>Les qualités personnelles :</h3>
                            <ul>
                                <li>- le webmarketer doit être curieux et à l’affut des nouvelles tendances du Web</li>
                                <li>- Il fait souvent le lien entre les différents membres d’une équipe, il doit être à l’écoute des autres et s’adapter aux situations</li>
                                <li>- Il doit avoir une bonne capacité d’analyse et de prise de décision</li>
                                <li>- Créatif, le webmarketer débord d’idées pour attirer de nouveaux clients sur son site tout en combinant rigueur et organisation.</li>
                            </ul>
                            <h3>Les compétences professionnelles :</h3>
                            <ul>
                                <li>- connaissance des outils de marketing stratégique et opérationnel : marketing direct, publicité, relation presse, street marketing…</li>
                                <li>- connaissance des outils de webmarketing : référencement, affiliation, partenariat, emailing, blogs, netlinking…)</li>
                                <li>- maitrise des méthodes d’analyse marketing</li>
                                <li>- bonne connaissance des réseaux sociaux</li>
                                <li>- bonne maitrise de la rédaction de contenu web</li>
                                <li>- connaissance des langages HTML, XML, PHP, MySQL</li>
                            </ul>
                            <h2>Où travailler en tant que webmarketer ?</h2>
                            <p>
                                Le webmarketer est recherché dans les entreprises ayant un site internet et surtout les entreprises du type start-up (site marchands, e-commerce…) ou en agence de communication Web ou de communication.
                                Le salaire et évolution du webmarketer
                                Un webmarketer avec 2 à 3 ans d’expérience perçoit une rémunération entre 30 000 et 40 000euros brut par an. Le webmarketer peut voir sa carrière évoluer vers des postes de chef de produit Web, traffic manager, référenceur, responsable de partenariat ou affiliation.
                            </p>
                        </div>

           <button class="rw-jobs-click-view rw-job-color-txt-{{$job->id}}" onclick="clickView({{$job->id}})"><i class="fa fa-angle-down"></i></button>

    	    		</div>

    	    		<div class="rw-jobs-index-triangle rw-job-color-triangle-{{$job->id}}"></div>
        		</div>
                @endforeach

            </div>
    	</div>
    </div>

@stop