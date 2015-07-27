$(document).ready(function($id){
    
    var jobItem = document.getElementsByTagName('.rw-carrous-navbar-job');   
    
    jobItem.addEventListener( "click", function( event ) {
        
        $('.rw-carrous-navbar-line').css({
            width : 'calc(150px * ' + $id + ')'
        });
    });
    
/*    $('.rw-carrous-navbar-line').css({
        width : 'calc(300px * ' + $id + ')'
        //width: '300px'
    });
*/
    
});