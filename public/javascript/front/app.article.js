$(document).ready(function() {

    $('#rw-blog-fct-plus').click(function (){
        $('.rw-blog-article-content').toggleClass('rw-blog-article-content-p-plus')
    });

    $('#rw-blog-fct-moins').click(function (){
        $('.rw-blog-article-content').toggleClass('rw-blog-article-content-p-moins')
    });


});

$(function timeVal(){

    var content = $('#rw-article-content-bdd').html();
    var content_text = content.replace(/(<([^>]+)>)/ig,"",/\s\s+/g, ' ').trim();

    var time=(content_text.length*0.18)/60;
    var time_val = (Math.round(time)+ ' min '+ Math.floor((time-Math.round(time))*60) + ' sec');
    $('#timeVal').html('<i class="fa fa-clock-o"></i> ' + time_val);

});
$(function timeValBis(){

    var content = $('#rw-article-content-bddbis').html();
    var content_text = content.replace(/(<([^>]+)>)/ig,"",/\s\s+/g, ' ').trim();

    var time=(content_text.length*0.18)/60;
    var time_val = (Math.round(time)+ ' min '+ Math.floor((time-Math.round(time))*60) + ' sec');
    $('#timeValbis').html('<i class="fa fa-clock-o"></i> ' + time_val);

});