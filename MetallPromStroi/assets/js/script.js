$( document ).ready(function() {
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
  });

  $('.trust_slider').slick({
    nextArrow: '<i class="fa fa-arrow-right"></i>',
    prevArrow: '<i class="fa fa-arrow-left"></i>',
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 5,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $(".hamburger").click(function(){ //hamburger animation
    $(this).toggleClass("is-active");
  });

  $(".hamburger_wrapper").click(function(){//slide menu toogle
    $(".slide_menu_wrapper").toggleClass("slide_menu_shown");
    $(".slide_menu_wrapper").toggleClass("slide_menu_hide");
    $(".overlay").toggleClass("overlay_hide");
  });

  $(".overlay").click(function(){//click on overlay
    $(".hamburger").toggleClass("is-active");
    $(".slide_menu_wrapper").toggleClass("slide_menu_shown");
    $(".slide_menu_wrapper").toggleClass("slide_menu_hide");
    $(".overlay").toggleClass("overlay_hide");
  });

});