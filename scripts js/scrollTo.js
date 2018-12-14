$(document).ready(function(){

    $("#more").click(function(){

       $('html, body').animate({

        scrollTop: $("#modalBox").offset().top

       }, 600);

    });

});