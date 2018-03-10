/*-----------------------------------------------------------------------------------*/
/*      * global $, jQuery, alert  
/*-----------------------------------------------------------------------------------*/

(function ($) {

    'use strict';
	
    new WOW().init();

	
    /*-----------------------------------------------------------------------------------*/
    /*  * Start Preloader
    /*-----------------------------------------------------------------------------------*/

    // Use frameworks Typed JS For Anomation
    
    var typed = new Typed('#loader-typed', {
        
    stringsElement: '#loader-typed-strings',
    backDelay: 180,
    typeSpeed: 190,
    loop: true
        
    });
    
    // loader Check
    
    var win = $(window);
    
    win.on('load',function() {
           
        $('#loader').delay(1500).fadeOut('slow', function(){
            $('#loader').remove();
        });
        
    });
	
    /*-----------------------------------------------------------------------------------*/
    /*  * Start NiceScroll
    /*-----------------------------------------------------------------------------------*/

    // Change Scroll Design For Mobile
    
    var blockNiceScroll = $(window).width();
    
    if(blockNiceScroll >= 768) {
    
        $("body").niceScroll({

            cursorcolor: "#d9bf77",
            cursorborder: "1px solid #d9bf77",
            cursorwidth: "6px",
            zindex:99999999

        });
  
        
    }else {
        
        $("body").getNiceScroll().remove();

    }
    
    // Repeat Code Change Design Scroll For Responsive

    $(window).on('resize', function(){ 
        
    var blockNiceScroll = $(window).width();
    
    if(blockNiceScroll >= 767) {
    
        $("body").niceScroll({

            cursorcolor: "#d9bf77",
            cursorborder: "1px solid #d9bf77",
            cursorwidth: "6px",
            zindex:99999999

        });

        
    }else {
        
        $("body").getNiceScroll().remove();

    }

        
    });  
	
    /*-----------------------------------------------------------------------------------*/
    /*  Start NavBar Navigtion
    /*-----------------------------------------------------------------------------------*/      
        
    $(window).scroll(function () {

    var heightScroll = $(this).scrollTop();

    if(heightScroll >= 46){

        $(".menu-nav .navbar-default").attr("id","whiteFixed");
        $(".navbar>.container .navbar-brand").attr("id","brandColorFixed");
        $(".navbar-default .navbar-nav>li>a").attr("id","linkColorFixed");
        $(".navbar-default .navbar-toggle .icon-bar").attr("id","icon-barColor");

    }else{


        $("#whiteFixed").removeAttr("id");
        $("#brandColorFixed").removeAttr("id");
        $(".navbar-default .navbar-nav>li>a").removeAttr("id");
        $(".navbar-default .navbar-toggle .icon-bar").removeAttr("id");


    }
        
    });
    
    $(window).on('resize', function(){
        
    $(window).scroll(function () {

    var heightScroll = $(this).scrollTop();

    if(heightScroll >= 46){

        $(".menu-nav .navbar-default").attr("id","whiteFixed");
        $(".navbar>.container-fluid .navbar-brand").attr("id","brandColorFixed");
        $(".navbar-default .navbar-nav>li>a").attr("id","linkColorFixed");
        $(".navbar-default .navbar-toggle .icon-bar").attr("id","icon-barColor");
        
    }else{


        $("#whiteFixed").removeAttr("id");
        $("#brandColorFixed").removeAttr("id");
        $(".navbar-default .navbar-nav>li>a").removeAttr("id");
        $(".navbar-default .navbar-toggle .icon-bar").removeAttr("id");


    }
        
    });

    });    
    /*-----------------------------------------------------------------------------------*/
    /*  Start Header - Home
    /*-----------------------------------------------------------------------------------*/    
    
    $("#slideshow > .imgHead:gt(0)").hide();

    setInterval(function() {
        
      $('#slideshow > .imgHead:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
        
    }, 16000);
    
    /*-----------------------------------------------------------------------------------*/
    /*  Start Services
    /*-----------------------------------------------------------------------------------*/       
    
    $(".services .boxServices .item-services").on('mouseenter', function(){
        
        $(this).children().attr("id", "colorB");
        
    });
    
    $(".services .boxServices .item-services").on('mouseleave', function(){
        
        $(this).children().removeAttr("id", "colorB");
        
    });
    
    /*-----------------------------------------------------------------------------------*/
    /*  Start Clients Section
    /*-----------------------------------------------------------------------------------*/
	
	$('.multiple-items').slick({
      arrows: false,
  	  dots: false,
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 3,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  responsive: [
		{
		  breakpoint: 767,
		  settings: {
            arrows: false,
              slidesToShow: 2,
              slidesToShow: 2,
              slidesToScroll: 2,
			infinite: true,
			dots: false
		  }
		}
	  ]
	});
    
    /*-----------------------------------------------------------------------------------*/
    /*  Start Smooth Scroll To Sections
    /*-----------------------------------------------------------------------------------*/
    
    $(".scroll-home").on('click', function() {
        
        $("html, body").animate({
            
            scrollTop: $("#header").offset().top
            
        },1000);
        
    });

    $(".scroll-about").on('click', function() {
        
        $("html, body").animate({
            
            scrollTop: $("#about").offset().top 
            
        },1000);
        
    });
    
    $(".scroll-services").on('click', function() {
        
        $("html, body").animate({
            
            scrollTop: $("#services").offset().top 
            
        },1000);
        
    });
    
    
    $(".scroll-resume").on('click', function() {
        
        $("html, body").animate({
            
            scrollTop: $("#resume").offset().top
            
        },1000);
        
    });

    $(".scroll-portfolio, #header .head .itemsHead button.btn.btnBlue").on('click', function() {
        
        $("html, body").animate({
            
            scrollTop: $("#portfolio").offset().top 
            
        },1000);
        
    });
    
    $(".scroll-blogs").on('click', function() {
        
        $("html, body").animate({
            
            scrollTop: $("#blogs").offset().top 
            
        },1000);
        
    });
    
    $(".scroll-contact, #header .head .itemsHead button.btn.btnRed").on('click', function() {
        
        $("html, body").animate({
            
            scrollTop: $("#contact").offset().top 
            
        },1000);
        
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    

})(jQuery);	

/*-----------------------------------------------------------------------------------*/
/*      * End  
/*-----------------------------------------------------------------------------------*/