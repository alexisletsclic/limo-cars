var triggerTabList = [].slice.call(document.querySelectorAll('#myTab button'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
});

jQuery(document).ready(function($){ 

  // Burger menu
  $(".navbar-toggler").on('click', function() {
    $(this).toggleClass("open");
    $('.site-header').toggleClass("disable");
    $('.menu-modal').toggleClass("active");
    $('.widget_icl_lang_sel_widget').toggleClass("visible");
    $('body').toggleClass('lock');
  });

  $(".navbar-mobile .menu-item-has-children").on('click', function() {
    $(this).toggleClass("opened");
  });

  $(".main-menu-link").on('click', function() {
    $('mobile-nav-menu .navbar-mobile .menu-item-has-children').toggleClass("opened");
  });



    //slick slider
    $('.service-slider').slick({
      variableWidth: true,
      slidesToShow: 2,
      slidesToScroll: 2,
      dots: true,
      arrows: true,
      infinite: false,
      swipeToSlide: true,
      touchThreshold: 100,
      prevArrow: '<button class="slick-arrow prev-arrow"></button>',
      nextArrow: '<button class="slick-arrow next-arrow"></button>',
      speed: 400,
      cssEase: 'ease-out',
      useTransform: true,
      responsive: [
        {
            breakpoint: 768,
            settings: {
                autoplay: true,
                autoplaySpeed: 3000
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        },
        {
            breakpoint: 360,
            settings: {
                slidesToShow: 1,
                centerMode: true,
                centerPadding: '60px',
            }
        }
    ]
    });

    $('.vehicles-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: false,
      arrows: true,
      prevArrow: '<button class="slick-arrow prev-arrow"></button>',
      nextArrow: '<button class="slick-arrow next-arrow"></button>',
      cssEase: 'ease-out',
      useTransform: true,
      responsive: [
        {
          breakpoint: 1400,
          settings: {
              slidesToShow: 3,
          }
      },
      {
          breakpoint: 1270,
          settings: {
              slidesToShow: 2,
          }
      },
        {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              autoplaySpeed: 3000
            }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            autoplaySpeed: 3000
          }
      }
      ]
    });


    
    $('.sedan-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: false,
      arrows: true,
      prevArrow: '<button class="slick-arrow prev-arrow"></button>',
      nextArrow: '<button class="slick-arrow next-arrow"></button>',
      cssEase: 'ease-out',
      useTransform: true,
      responsive: [
      {
        breakpoint: 1040,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: true,
          arrows:false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows:false
        }
      }
      ]
    });

    $(document).on(
      'click',
      'a[href="#"]',
      function (e) {
        e.preventDefault();        
      }
    );

    const elem = $(document).find('#masthead').not('.fixed-size-header');
    const doc = $(document);
    function scrolled() {
      const threshold = doc.scrollTop() > 50;
      elem.toggleClass('scrolled', threshold);
    }
    $(window).on({ scroll: scrolled });

    // Dropdown Footer Menu
    function dropdown() {
      const selectItem = document.querySelectorAll(".mobile-menu-footer .menu-footer > .menu-item");

      selectItem.forEach((item, i) => {
        item.addEventListener("click", (event) => {
          const selectBody = document.querySelectorAll(".mobile-menu-footer .menu-footer > .menu-item >.sub-menu");

          selectBody[i].classList.toggle("show");
          item.classList.toggle("shadow");
        });
      });
    }

    dropdown();  


    $(window).on('load resize', function() {
        var content_text = $(document).find('.content-text__inner');
        var content_more = $(document).find('.content-text__more');
        var content_height = 124;

        content_text.removeClass('not-inited');
        content_text.removeClass('lot-content');
        content_more.addClass('hidden');

        if ($(window).width() <= 991 && content_text.height() > content_height) {
            content_text.addClass('lot-content');
            content_more.removeClass('hidden');
        }
    });

    $(document).on('click', '.content-text__more', function() {
        var _text_more = $(this).attr('data-text-more');
        var _text_less = $(this).attr('data-text-less');

        $(this).toggleClass('active');
        $('.content-text__inner').toggleClass('opened');

        if($(this).hasClass('active')) {
            $(this).text(_text_less);
        } else {
            $(this).text(_text_more);
        }
    });

});

document.addEventListener('DOMContentLoaded', () => {
  function myFunction() {
    const elem = document.querySelectorAll('.navbar-mobile .sub-menu');

    const el = Array.from(elem);

    el.forEach(item => {const link = item.parentNode.firstChild.cloneNode(true)
      item.prepend(link);
      link.classList.add("main-menu-link");
    });
  }
  myFunction();
});


