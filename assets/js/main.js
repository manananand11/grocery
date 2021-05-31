$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});


 mybutton = document.getElementById("myBtn");
      window.onscroll = function(){scrollFunction()};

      function scrollFunction(){
        if(document.body.scrollTop > 20 || document.documentElement.scrollTop>20){
          mybutton.style.display = "block";
        } else{
          mybutton.style.display= "none";
        }
      }
      function topFunction(){
        document.body.scrollTop=0;
        document.documentElement.scrollTop=0;
      }

$( '.owl-carousel' ).owlCarousel({
    items: 6,
    nav: true,
    dots: false,
    mouseDrag: true,
    responsiveClass: true,
    responsive: {
        0:{
          items: 1
        },
        480:{
          items: 3
        },
        769:{
          items: 4
        }
    }
});