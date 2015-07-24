$(document).ready(function(){

    $('.rw-jobs-click-view').click(function(){
        $(this).children('i').toggleClass('rw-jobs-rotate');
        $('.rw-jobs-index-fiche').slideToggle('.rw-jobs-hide');
        $('.rw-jobs-index-description').toggleClass('rw-jobs-index-description-width');
    });

    //$('.rw-jobs-click-view-' + $id).on('click', function($id){

      //  $(this).children('i').toggleClass('rw-jobs-rotate');
       // $('.rw-jobs-index-fiche-' + $id).slideToggle('.rw-jobs-hide');
        //$('.rw-jobs-index-description-' + $id).toggleClass('rw-jobs-index-description-width');
    //});


});