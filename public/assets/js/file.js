


$(document).ready(function(){
  window.onscroll = function() {Navtop()};

  function Navtop() {
    if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250 ) {
    
      $('.mynavbarperosonal').addClass("bg-dark");
    } else {
      $('.mynavbarperosonal').removeClass("bg-dark");
    }
  }
  

 
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
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });


    // Gallery one top 

    $('.topgallery.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:700,
        lazyLoad:true,
        smartSpeed:350,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });



    $('#gallery1').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 8000,
        pauseOnHover: false,
        cssEase: 'linear',
        dots: false,
        prevArrow: false,
        nextArrow: false,
        
        responsive: [{
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: false,
          }
        }]
      });


      
    $('#gallery2').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 8000,
        pauseOnHover: false,
        cssEase: 'linear',
        dots: false,
        prevArrow: false,
        nextArrow: false,
        responsive: [{
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: false,
          }
        }]
        
      });



   







 // Typing Text 

 var typed = new Typed(".animatedtext", {
  strings: ["Creative<br/>Work Idea",
  "Creative"],
    
  typeSpeed: 100,
  backSpeed: 50,
  loop: true,
});

 //   -----------------------------------------How It Works -------------------------------------------------

 


});





// Cusotm javascript 


window.onscroll = function() {myFunction()};

 // Get the header
 var header = document.querySelector(".howitworksnavbar");
 
 // Get the offset position of the navbar
 var sticky = header.offsetTop;
 
 // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
 function myFunction() {
   if (window.pageYOffset > sticky) {
     header.classList.add("howitworkssticky");
   } else {
     header.classList.remove("howitworkssticky");
   }
 }