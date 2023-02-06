
$(document).ready(function () {


 


    $(document).scroll(function() {  // OR  $(window).scroll(function() {
        Footerbottom();
    });

    // Sticky bottom 

   
    function Footerbottom() {
        
        if (
            document.body.scrollTop > 250 ||
            document.documentElement.scrollTop > 250
        ) {
            $(".footerstickybottom").addClass("d-block");
        } else {
            $(".footerstickybottom").removeClass(
                "d-block"
            );
        }
    }

    // Renovation Experience steps 
 
    $(".timeline .icon").on("click",function(){
        $(this).parent().next(".col").find('.content').toggle();
        // alert($(this).parent().next(".col-8").find('.content').html());
    });




    // Index Page Brands 

    $('.brandssection .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })

    // Business Opertunies 

    $('.businessoppertunity.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    })

    // Remodeling Top Slider 

    $('.remodelingslidertop .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })





    // Gallery owlcarousel Top
  // How it Works Code 
  $(".plus").parent("h3").next("p").hide();
$(".plus.first").parent("h3").next("p").show();


  $(".plus").on("click",function(){
    $(".plus").each(function(){
$(this).parent("h3").next("p").hide('500');
    });

$(this).parent("h3").next("p").toggle('5000');

  });


 


// Gallery owlcarousel Top 

$('.gallerytopslickslider.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  autoplay:true,
  dots:false,
  autoplaySpeed: 3000,
  autoplayHoverPause:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
})



// kitchen head 

$('.kithcenhead .owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  dots:false,
  autoplay:true,
  autoplayTimeout:3000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})

// Swiper js 

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  autoplay: 5000,
    speed: 800,
    autoplayDisableOnInteraction: false
});


// Google Review Section 

$('.googlereviewsection .owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:3
      }
  }
})




 
	$('nav .dropdown').hover(function(){
		var $this = $(this);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			$this.find('.dropdown-menu').removeClass('show');
	});



    // Owl Carousel Part 

    var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

  // Main Slider Code 

	var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
     
	    nav:true,
	    dots: true,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }
		});

	};
	carousel();


    // Logos section 


    $('.logosection.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        nav:false,
        autoplay:true,
        Number:500,
        responsive:{
            0:{
                items:2
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });

    // kitchen head

    $(".kithcenhead .owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
        },
    });

    // Swiper js

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        autoplay: 5000,
        speed: 800,
        autoplayDisableOnInteraction: false,
    });

    // Google Review Section

    $(".googlereviewsection .owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 3,
            },
        },
    });

    $("nav .dropdown").hover(
        function () {
            var $this = $(this);
            $this.addClass("show");
            $this.find("> a").attr("aria-expanded", true);
            $this.find(".dropdown-menu").addClass("show");
        },
        function () {
            var $this = $(this);
            $this.removeClass("show");
            $this.find("> a").attr("aria-expanded", false);
            $this.find(".dropdown-menu").removeClass("show");
        }
    );

    // Owl Carousel Part

    var fullHeight = function () {
        $(".js-fullheight").css("height", $(window).height());
        $(window).resize(function () {
            $(".js-fullheight").css("height", $(window).height());
        });
    };
    fullHeight();

    // Main Slider Code

    var carousel = function () {
        $(".home-slider").owlCarousel({
            loop: true,
            autoplay: true,
            margin: 0,
            animateOut: "fadeOut",
            animateIn: "fadeIn",

            nav: true,
            dots: true,
            autoplayHoverPause: false,
            items: 1,
            navText: [
                "<span class='ion-ios-arrow-back'></span>",
                "<span class='ion-ios-arrow-forward'></span>",
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },
        });
    };
    carousel();

    // Logos section

    $(".logosection.owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: false,
        autoplay: true,
        Number: 500,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });

    // Gallery one top

    // $('.topgallery.owl-carousel').owlCarousel({
    //     loop:true,
    //     margin:10,
    //     nav:false,
    //     dots:false,
    //     autoplay:true,
    //     autoplayTimeout:700,
    //     lazyLoad:true,
    //     smartSpeed:350,
    //     responsive:{
    //         0:{
    //             items:1
    //         },
    //         600:{
    //             items:3
    //         },
    //         1000:{
    //             items:5
    //         }
    //     }
    // });

    $("#gallery1").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 2000,
        cssEase: "linear",
        dots: false,
        prevArrow: false,
        nextArrow: false,
        pauseOnHover: true,

        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    centerMode: false,
                },
            },
        ],
    });

    $("#gallery2").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 2000,
        cssEase: "linear",
        dots: false,
        prevArrow: false,
        nextArrow: false,
        pauseOnHover: true,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    centerMode: false,
                },
            },
        ],
    });

  
$(document).scroll(function(){
Navtop();
});
   
    function Navtop() {
        if (
            document.body.scrollTop > 250 ||
            document.documentElement.scrollTop > 250
        ) {
            $(".mynavbarperosonal").addClass("bg-dark  fixed-top sticky-top ");
        } else {
            $(".mynavbarperosonal").removeClass(
                "bg-dark  fixed-top sticky-top "
            );
        }
    }

    
});

$('#room').click(()=>{
    $('.list1').toggle('500')
   $('#room i').toggleClass('bi-plus bi-dash');
   
})
$('#build').click(()=>{
      $("#build i").toggleClass("bi-plus bi-dash");
    $('.list2').toggle('500')
})