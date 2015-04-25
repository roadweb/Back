(function(){
    'use strict';

    $('[data-toggle="tooltip"]').tooltip();
    $('[data-confirm="delete"]').confirm({
        confirm: function(element){
            return element.parent().submit();
        },
        cancel: function(){
            console.log('cancel');
        },
        post: true
    });
})();