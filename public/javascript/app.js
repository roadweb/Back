(function(){
    'use strict';

    $('[data-toggle="tooltip"]').tooltip();
    $('[data-confirm="delete"]').confirm({
        confirm: function(){
            return true;
        },
        post: true
    });
})();