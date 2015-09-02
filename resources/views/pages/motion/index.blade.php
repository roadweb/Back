@extends('pages.app')

@section('content')
@include('pages.components.header')
<img class="rw-fond-exagone-top" src="{{ asset('images/exagonefond.png')}}"/>

    <!---------------------
 développé par Pauline: mentions légales
----------------------->




<div class="rw-mentions-container">

    <div class="rw-mentions-header">
        <h1>Mentions légales de Road Web</h1>
    </div>

    <div class="rw-mentions-content">

        <p>Entité : Road-Web – 12 rue de l'Abbé Carton, 75014 Paris
            Le site : http://www.road-web.fr est administré par Road-Web.</p>
        <p>Directeur de publication : Florian Chambolle</p>

        <h2>Hébergeur</h2>
        <p>OVH <br/>
            SAS au capital de 10 000 000 €<br/>
            RCS Roubaix – Tourcoing 424 761 419 00045 <br/>
            Code APE 6202A <br/>
            N° TVA : FR 22 424 761 419 <br/>
            Siège social : 2 rue Kellermann – 59100 Roubaix – France. <br/>
        </p>

        <h2>Propriété intellectuelle</h2>
        <p>Road-Web est propriétaire des droits de propriété intellectuelle ou détient tous les droits d’usage sur tous les éléments contenus dans le site, accessibles sur celui-ci et créés pour lui, notamment les images et les graphismes. Il est strictement interdit de copier et de reproduire les visuels de ce site pour quelle que fin que ce soit. Toute reproduction, représentation, modification, publication, création d’oeuvre dérivée, adaptation de tout ou partie du site quel que soit le moyen ou le procédé utilisé est interdite, sauf autorisation préalablement écrite par Road-Web. Toute tentative de trouver le code source (à l’exception des cas prévus par la loi), de vendre, de transférer de quelle que manière que ce soit tout droit afférent aux logiciels, de les modifier ou d’utiliser des versions modifiées en vue d’obtenir un accès non-autorisé au service et d’accéder au site par un autre moyen que par l’interface fournie par Road-Web est interdit.</p>

        <h2>Protections des données</h2>
        <p>Road-Web s’engage à préserver la confidentialité des informations fournies en ligne par l’internaute et est responsable du traitement de ces données. Nous pouvons être amenés à les utiliser pour entrer en contact avec les internautes, dans le cadre de communications professionnelles (newsletters, jeux concours, inaugurations ou tout autre évènement ou animation pouvant être organisé par Road-Web et susceptible d’intéresser les internautes). Toute information personnelle que l’internaute transmet à Road-Web, pour l’utilisation de certains services, est soumise aux dispositions de la Loi n°78-17 Informatique et Liberté du 06 Janvier 1978. A ce titre, l’internaute dispose d’un droit d’accès, de rectification et de suppression des informations personnelles, qu’il peut exercer à tout moment en adressant un courrier à l’adresse suivante : Road-Web – 12 rue de l'Abbé Carton, 75014 Paris.</p>


    </div>
</div>


@include('pages.components.footer')

@stop