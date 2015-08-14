$(document).ready(function(){

    $('#rw-cpt-button-infos').click(function(){
        $('#rw-cpt-btn-submit-infos').css("opacity", "1");
        $('.rw-cpt-input').css("display", "block");
        $('.rw-cpt-textarea').css("display", "block");
        $(this).css("opacity", "0.3");
    });

    $('#rw-cpt-btn-submit-infos').click(function(){
        $('#rw-cpt-button-infos').css("opacity", "1");
        $('.rw-cpt-input').css("display", "none");
        $('.rw-cpt-textarea').css("display", "none");
        $(this).css("opacity", "0");
    });

    $('#rw-cpt-button-avatar').click(function(){
        $('#rw-cpt-btn-submit-avatar').css("opacity", "1");
        $(this).css("opacity", "0.3");
    });

    $('#rw-cpt-btn-submit-avatar').click(function(){
        $('#rw-cpt-button-avatar').css("opacity", "1");
        $(this).css("opacity", "0");
    });
});