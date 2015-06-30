$(function(){
    setInterval(function(){
        $(".rw-aboutus-slideshow ul").animate({marginLeft:-80},800,function(){
            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
        })
    }, 4000);
});