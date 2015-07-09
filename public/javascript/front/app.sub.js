// ajout de la classe JS à HTML
document.querySelector(".rw-sub-checkbox").classList.add('rw-sub-js');

// initialisation des variables
var fileInput  = document.querySelector( ".rw-sub-input-file" ),
    button     = document.querySelector( ".rw-sub-input-file-trigger" ),
    the_return = document.querySelector(".rw-sub-file-return");

// action lorsque la "barre d'espace" ou "Entrée" est pressée
button.addEventListener( "keydown", function( event ) {
    if ( event.keyCode == 13 || event.keyCode == 32 ) {
        fileInput.focus();
    }
});

// action lorsque le label est cliqué
button.addEventListener( "click", function( event ) {
    fileInput.focus();
    return false;
});

// affiche un retour visuel dès que input:file change
fileInput.addEventListener( "change", function( event ) {
    the_return.innerHTML = this.value;
});