$(document).ready(function(){

    function showHide(event){
        var target = $(event.target);
        var id = target.data("name");
        $(".rw-jobs-content").hide();
        $(id).toggle();
    }

        $(".rw-link").on("click", showHide);
});