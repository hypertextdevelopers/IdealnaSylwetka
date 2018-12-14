window.addEventListener('load', function(){

   var introVideo = document.getElementById("introVideo");
   var introBox = document.getElementById("intro");
   var introButton = document.getElementById("introButton");

   introButton.addEventListener("click", function(){

    introVideo.src = "https://www.youtube.com/embed/O8RmGmA2IFE?autoplay=1";
    introVideo.style.opacity = "1";
    introVideo.style.visibility = "visible";
    introVideo.style.zIndex = "20";
    introBox.style.opacity = "0";
    introBox.style.visibility = "hidden";
    introBox.zIndex = "10";

   });


   var firstVideo = document.getElementById("firstVideoClip");
   var firstBox = document.getElementById("firstVideo");
   var firstVideoButton = document.getElementById("firstVideoButton");

   firstVideoButton.addEventListener("click", function(){

    firstVideo.src = "https://www.youtube.com/embed/O8RmGmA2IFE?autoplay=1";
    firstVideo.style.opacity = "1";
    firstVideo.style.visibility = "visible";
    firstVideo.style.zIndex = "20";
    firstBox.style.opacity = "0";
    firstBox.style.visibility = "hidden";
    firstBox.zIndex = "10";

   });

   var secondVideo = document.getElementById("secondVideoClip");
   var secondBox = document.getElementById("secondVideo");
   var secondVideoButton = document.getElementById("secondVideoButton");

   secondVideoButton.addEventListener("click", function(){

    secondVideo.src = "https://www.youtube.com/embed/O8RmGmA2IFE?autoplay=1";
    secondVideo.style.opacity = "1";
    secondVideo.style.visibility = "visible";
    secondVideo.style.zIndex = "20";
    secondBox.style.opacity = "0";
    secondBox.style.visibility = "hidden";
    secondBox.zIndex = "10";

   });

   var thirdVideo = document.getElementById("thirdVideoClip");
   var thirdBox = document.getElementById("thirdVideo");
   var thirdVideoButton = document.getElementById("thirdVideoButton");

   thirdVideoButton.addEventListener("click", function(){

    thirdVideo.src = "https://www.youtube.com/embed/O8RmGmA2IFE?autoplay=1";
    thirdVideo.style.opacity = "1";
    thirdVideo.style.visibility = "visible";
    secondVideo.style.zIndex = "20";
    thirdBox.style.opacity = "0";
    thirdBox.style.visibility = "hidden";
    thirdBox.zIndex = "10";

   });


}, false);