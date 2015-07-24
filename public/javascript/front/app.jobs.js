$(document).ready(function(){

    $('.rw-jobs-click-view').click(function(){
        $(this).children('i').toggleClass('rw-jobs-rotate');
        $('.rw-jobs-index-fiche').slideToggle('.rw-jobs-hide');
        $('.rw-jobs-index-description').toggleClass('rw-jobs-index-description-width');
    });


});