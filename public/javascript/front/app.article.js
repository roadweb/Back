$(document).ready(function() {

    $('#rw-blog-fct-plus').click(function (){
        $('.rw-blog-article-content').toggleClass('rw-blog-article-content-p-plus')
    });

    $('#rw-blog-fct-moins').click(function (){
        $('.rw-blog-article-content').toggleClass('rw-blog-article-content-p-moins')
    });


});

$(function timeVal(){

<<<<<<< HEAD
    var content = $('#rw-article-content-bdd').html();
    var content_text = content.replace(/(<([^>]+)>)/ig,"",/\s\s+/g, ' ').trim();

    var time=(content_text.length*0.18)/60;
=======
    var contentText = $('#rw-article-content-bdd').text();
    var time=(contentText.length*0.18)/60;
>>>>>>> 1e1c133aefaa8344ab106b340d47ee244f085755
    var time_val = (Math.round(time)+ ' min '+ Math.floor((time-Math.round(time))*60) + ' sec');
    $('#timeVal').html('<i class="fa fa-clock-o"></i> ' + time_val);

});

<<<<<<< HEAD
    var content = $('#rw-article-content-bddbis').html();
    var content_text = content.replace(/(<([^>]+)>)/ig,"",/\s\s+/g, ' ').trim();
=======
$(function timeValMobile(){

    var contentText = $('#rw-article-content-bdd-mobile').text();
>>>>>>> 1e1c133aefaa8344ab106b340d47ee244f085755

    var time=(contentText.length*0.18)/60;
    var time_val = (Math.round(time)+ ' min '+ Math.floor((time-Math.round(time))*60) + ' sec');
    $('#timeValMobile').html('<i class="fa fa-clock-o"></i> ' + time_val);

});
