//-- header fixed JavaScript -->
/**************************************************Header**********************************/

if ($(window).width() >= 992) {
  window.onscroll = function() {
    myFunction();
  };
  var header = document.getElementById("Header");
  var sticky = 460;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
}

/**************************************************Header_END**********************************/

//< !------scrollup---- - >
$(document).ready(function() {

  $(window).scroll(function() {

    if ($(this).scrollTop() > 100) {

      $('.scrollup').fadeIn();
    } else {
      $('.scrollup').fadeOut();
    }
  });
  $('.scrollup').click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
});
$(".carousel").swipe({
  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left')
      $(this).carousel('next');
    if (direction == 'right')
      $(this).carousel('prev');
  },
  allowPageScroll: "vertical"
});

/*************************PRODUCT_ZOOM******************************/
jQuery(function ($) {

    // Product gallery Slider
    $(".wpb_wiz_gallery_slider").owlCarousel({
        items: 4,
        nav: true,
        navText: ["<i class='wpb_wiz_icons_chevron-left'></i>", "<i class='wpb_wiz_icons_chevron-right'></i>"],
        dots: true,
        margin: 10
    });

    // Init the zoom

    $(".wpb-wiz-main-image").elevateZoom({
        gallery: 'wpb_wiz_gallery',
        galleryActiveClass: 'wpb-wiz-active',
        imageCrossfade: true,
        loadingIcon: 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/ajax-loader.gif',
        cursor: "crosshair",
        lensSize: 200,
        lensShape: "square",
        lensColour: "#ffffff",
        borderSize: 1,
        borderColour: '#888888',
        zoomType: "inner",
        responsive: true,
        zoomWindowWidth: 400,
        zoomWindowHeight: 400,
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 500,
        zoomWindowPosition: 1,
        zoomWindowOffetx: 10,
        easing: true
    });

    // Popup With zoom
    $(".wpb-wiz-main-image").bind("click", function (e) {
        var ez = $('.wpb-wiz-main-image').data('elevateZoom');

//        $.fancybox.open(ez.getGalleryListFancyboxThree());

        return false;
    });

    // Remove srcset & size attr
    $("#wpb_wiz_gallery a").on("click", function () {
        $('.single-product .wpb-wiz-main-images img').removeAttr('srcset');
        $('.single-product .wpb-wiz-main-images img').removeAttr('sizes');
    });

});

/*************************SLICK******************************/

$(document).ready(function() {
  $(".testimonial-carousel").slick({
    infinite: true,
    autoplay: true,
    arrows: true,
    dots: false,
    slidesToShow: 1,
    prevArrow: $(".testimonial-controls .prev"),
    nextArrow: $(".testimonial-controls .next"),
    responsive: [{
      breakpoint: 992,
      settings: {
        arrows: false,
        //                    centerMode: true,
        slidesToShow: 1
      }
    }, {
      breakpoint: 768,
      settings: {
        arrows: false,
        //                    centerMode: true,
        slidesToShow: 1
      }
    }, {
      breakpoint: 480,
      settings: {
        arrows: false,
        //                    centerMode: true,
        slidesToShow: 1
      }
    }]
  });
});


window.onload = function() {
  var elements = document.getElementsByClassName("page-title")
  for (var i = 0; i < elements.length; i++) {
    elements[i].innerHTML = elements[i].innerHTML.replace(/\\b([a-z])([a-z]+)?\\b/gim, "<span class='first-letter'>$1</span>$2")
  }
}


/****************************SP_SLIDER*********************************/
$(document).ready(function($) {
  $('#slider-pro').sliderPro({
    width: 690,
    height: 400,
    fade: true,
    arrows: true,
    buttons: false,
    fullScreen: false,
    shuffle: false,
    smallSize: 500,
    mediumSize: 768,
    largeSize: 1024,
    thumbnailArrows: false,
    autoplay: true,
    thumbnailWidth: 160,
    thumbnailHeight: 120,

    breakpoints: {
      992: {
        thumbnailWidth: 161,
        thumbnailHeight: 120
      },
      768: {
        thumbnailWidth: 151,
        thumbnailHeight: 120
      },
      500: {
        height: 450,
        thumbnailWidth: 75,
        thumbnailHeight: 30
      }
    }
  });
});

/*************************PPROJECT_FILTER******************************/

$(window).on('load', function() {
  var $container = $('.portfolioContainer');
  $container.isotope({
    filter: '*',
    animationOptions: {
      duration: 750,
      easing: 'linear',
      queue: false
    }
  });

  $('.portfolioFilter a').click(function() {
    $('.portfolioFilter .current').removeClass('current');
    $(this).addClass('current');

    var selector = $(this).attr('data-filter');
    $container.isotope({
      filter: selector,
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false
      }
    });
    return false;
  });
});

/*************************PPROJECT_FILTER******************************/
