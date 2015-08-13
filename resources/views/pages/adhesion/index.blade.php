<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Association Road Web - Adhésions et cotisations</title>

    <link rel="stylesheet" href="{{asset('css/front/rw-pp-style.css')}}"/>
</head>
<body>

<div class="rw-pp-main-container">

    <div class="rw-pp-header">
        <h1>Association </h1>
        <img src="{{asset('images/logo.png')}}" alt="Road-Web"/>
        <h2>Adhésion & Cotisations</h2>

    </div>

    <div class="rw-pp-main-content">
        <p>Vous souhaitez adhérer à l'association Road Web? Vous êtes élèves ou anciens élèves de l'EMWeb alors vous êtes au bon endroit.
        </p>

        <div class="rw-pp-btn-prop">
            <button id="rw-pp-btn-prop-add" class="rw-pp-btn-prop-add">Adhérer</button>
            <button id="rw-pp-btn-prop-cot" class="rw-pp-btn-prop-cot">Côtiser</button>
        </div>

        <div class="rw-pp-main-add" id="rw-pp-main-add">
            <h2>télécharger le bulletin d'adhésion et l'appel à cotisations</h2>
            <p>N'oubliez pas de compléter et d'envoyer le bulletin d'adhésion en téléchargement et envoyer le à l'adresse suivante: plateulere@gmail.com</p>
            <a href="{{asset('asso/roadweb-bulletin-adhesion.pdf')}}" target="_blank"><button class="rw-pp-main-add-btn-ba">Bulletin d'adhésion PDF</button></a>

            <a href="{{asset('asso/roadweb-bulletin-adhesion.docx')}}" target="_blank"><button class="rw-pp-main-add-btn-ba">Bulletin d'adhésion Word</button></a>

            <a href="{{asset('asso/appel-cotisation.pdf')}}" target="_blank"><button class="rw-pp-main-add-btn-ac">Appel à cotisations</button></a>

            <a href="{{asset('asso/Reglement-interieur.pdf')}}" target="_blank"><button class="rw-pp-main-add-btn-ri">Règlement Intérieur</button></a>

 <a href="{{asset('asso/StatutsROADWEB.pdf')}}" target="_blank"><button class="rw-pp-main-add-btn-sta">Statuts</button></a>

        </div>

        <div class="rw-pp-main-btn" id="rw-pp-main-btn">

            <h2>Montant des cotisations</h2>
            <ul>
                <li>Cotisations pour personnes actives : 20€</li>
                <li>Cotisations pour bénéficiaires du RSA : 12€</li>
                <li>Cotisations pour demandeurs d'emploi : 12€</li>
            </ul>
            <p>Merci d'inscrire le montant qui vous correspond après avoir cliquer sur le bouton "faire un don"</p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="VWE95ZQ27PGYG">
                <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
            </form>

        </div>

    </div>

    <footer>
        <div>
            <h2>Association Road-Web</h2>
            <p>Siège Social: 12, Rue de l'Abbé Carton, 75014 Paris</p>

        </div>

        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="VWE95ZQ27PGYG">
            <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
            <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
        </form>

    </footer>
</div>

<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('javascript/front/app.adhesion.js')}}"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-62609975-3', 'auto');
    ga('send', 'pageview');

</script></body>
</html>