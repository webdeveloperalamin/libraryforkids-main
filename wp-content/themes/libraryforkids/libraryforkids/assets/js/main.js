;(function ($) {
    'use strict'
    $(document).ready(function () {
        
        $('.menu-btn').on("click", function() {
            $(this).toggleClass('opened');          
        }); 
        
        $('.menu-btn.text-reset').on("click", function() {
            $('.header-right .menu-btn').removeClass('opened');       
        });

        $('.offcanvas-backdrop').on("click", function() {
            $('.header-right .menu-btn').removeClass('opened');       
        });
    });
})(jQuery)