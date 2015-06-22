$(function () {
    $(window).scroll(function () {
        //Au scroll dans la fenetre on déclenche la fonction
        if ($(this).scrollTop() > 150) {
            //si on a défilé de plus de 150px du haut vers le bas
            $('#rw-nav').addClass('fixNavigation');
            $('#rw-search').addClass('transSearch');
             //on ajoute la classe "fixNavigation" à <div id="navigation">
             }
        else
            {
                $('#rw-nav').removeClass("fixNavigation");
                $('#rw-search').removeClass('transSearch');

                //sinon on retire la classe "fixNavigation" à <div id="navigation">
            }
        });
    });