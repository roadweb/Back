$(document).ready(function(){

    $('#rw-pp-main-add').hide();
    $('#rw-pp-btn-prop-add').click(function(){

        $(this).toggleClass('active');
        $('#rw-pp-main-add').slideToggle(500);
        $('#rw-pp-main-btn').hide(500);

    });

    $('#rw-pp-main-btn').hide();
    $('#rw-pp-btn-prop-cot').click(function(){

        $(this).toggleClass('active');
        $('#rw-pp-main-btn').slideToggle(500);
        $('#rw-pp-main-add').hide(500);
    });

});
