$(document).ready(function() {

    $('#rw-blog-fct-plus').click(function (){
        $('.rw-blog-article-content').toggleClass('rw-blog-article-content-p-plus')
    });

    $('#rw-blog-fct-moins').click(function (){
        $('.rw-blog-article-content').toggleClass('rw-blog-article-content-p-moins')
    });


});

$(function timeVal(){

    var contentText = $('#rw-article-content-bdd').text();
    var time=(contentText.length*0.18)/60;
    var time_val = (Math.round(time)+ ' min '+ Math.floor((time-Math.round(time))*60) + ' sec');
    $('#timeVal').html('<i class="fa fa-clock-o"></i> ' + time_val);

});

$(function timeValMobile(){

    var contentText = $('#rw-article-content-bdd-mobile').text();

    var time=(contentText.length*0.18)/60;
    var time_val = (Math.round(time)+ ' min '+ Math.floor((time-Math.round(time))*60) + ' sec');
    $('#timeValMobile').html('<i class="fa fa-clock-o"></i> ' + time_val);

});
