(function () {
    'use strict';

    angular
        .module('app', ['textAngular'])
        .config(function ($interpolateProvider) {
            $interpolateProvider.startSymbol('<%').endSymbol('%>');
        })
        .controller('textArea', textArea);

    function textArea($scope) {

    }

    $('[data-toggle="tooltip"]').tooltip();

    $('[data-confirm="delete"]').confirm({
        confirm: function (element) {
            return element.parent().submit();
        },
        post   : true
    });

    $('[data-spy="affix"]').on('affix.bs.affix', function () {
        var widthElement = $(this).width() + 'px';
        $(this).css({
            'width': widthElement
        });
    });

    $('[data-spy="affix"]').on('affix-top.bs.affix', function () {
        $(this).css({
            'width': ''
        });
    });

    $('body').scrollspy({target: '#list'});

})();