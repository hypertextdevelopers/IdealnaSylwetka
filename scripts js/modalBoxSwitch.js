window.addEventListener('load', function(){

    var registerButton = document.getElementById("registered");
    var modalBox1 = document.getElementById("modalBox");
    var modalBox2 = document.getElementById("modalBox2");
    var goRegister = document.getElementById("goRegist");

    registerButton.addEventListener('click', function(){

        modalBox1.style.top = "1250px";
        modalBox1.style.opacity = 0;
        modalBox2.style.marginTop = "250px";
        modalBox2.style.zIndex = 100;
        modalBox2.style.boxShadow = "0px 0px 30px -6px #000000bf";

    });

    goRegister.addEventListener('click', function(){

        modalBox1.style.top = "1250px";
        modalBox1.style.opacity = 1;
        modalBox1.style.top = "50%";
        modalBox1.style.marginTop = "-210x";
        modalBox2.style.marginTop = "-400px";
        modalBox2.style.zIndex = 5;
        modalBox2.style.boxShadow = "none";

    });


}, false);



