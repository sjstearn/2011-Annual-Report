/*-----------------------------------------------------------------------------------*/
/* Preloader & Initialize Masonry Script
/*-----------------------------------------------------------------------------------*/
jQuery.noConflict();

jQuery('.ajaxloading').fadeIn(500);
jQuery(window).load(function(){ 
	jQuery('.ajaxloading').fadeOut(500);
});

jQuery(window).load(function(){ 
    jQuery(".slideshowpreload").fadeOut('slow');     
});

/*-----------------------------------------------------------------------------------*/
/* Superfish Initialization
/*-----------------------------------------------------------------------------------*/


	jQuery(function() { 
        jQuery('ul.sf-menu').superfish({ 
            autoArrows:  true
        }); 
    }); 

/*-----------------------------------------------------------------------------------*/
/* Tabs
/*-----------------------------------------------------------------------------------*/
    if(jQuery() .tabs) {	 
		jQuery( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
		jQuery( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
		jQuery( "#tabs" ).tabs({ fx: { opacity: 'toggle' } });
	};
	
/*-----------------------------------------------------------------------------------*/
/* Pretty Photo
/*-----------------------------------------------------------------------------------*/
	
	jQuery(function(){
	   jQuery("a[rel^='prettyPhoto']").prettyPhoto({
			animation_speed: 'fast', /* fast/slow/normal */
			slideshow: 5000, /* false OR interval time in ms */
			autoplay_slideshow: false, /* true/false */
			opacity: 0.80, /* Value between 0 and 1 */
			show_title: false, /* true/false */
			allow_resize: true, /* Resize the photos bigger than viewport. true/false */
			default_width: 500,
			default_height: 344,
			counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
			theme: '<?php  if ($ppskin = get_option('of_prettyphoto_skin')) { echo $ppskin; } else { echo 'light_square'; } ?>', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
			horizontal_padding: 20, /* The padding on each side of the picture */
			hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
			wmode: 'opaque', /* Set the flash wmode attribute */
			autoplay: true, /* Automatically start videos: True/False */
			modal: false, /* If set to true, only the close button will close the window */
			deeplinking: true, /* Allow prettyPhoto to update the url to enable deeplinking. */
			overlay_gallery: true, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
			keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
			changepicturecallback: function(){}, /* Called everytime an item is shown/changed */
			callback: function(){}, /* Called when prettyPhoto is closed */
			ie6_fallback: true
			});
	});
	
	
/*-----------------------------------------------------------------------------------*/
/* Hover Effects
/*-----------------------------------------------------------------------------------*/

	function hover_overlay() {
       
         jQuery('.flexslider .slides').each(function() {
                 var $this = jQuery(this);
                  $this.hover( function() {
                 
                      jQuery($this).stop().animate({opacity : 0.1}, 500);
                }, function() {
                    jQuery($this).stop().animate({opacity : 1}, 500);
              
                });
         });
    }
   
   
    hover_overlay();

       function hover_overlay_slide() {
        
        jQuery('.video').hover( function() {
            jQuery(this).stop().animate({opacity : 1}, 100);
        }, function() {
            jQuery(this).stop().animate({opacity : .9}, 100);
        });
    }
    
    hover_overlay_slide();
    
    function hover_overlay_images() {
        
        jQuery('a img').hover( function() {
            jQuery(this).stop().animate({opacity : 0.7}, 500);
        }, function() {
            jQuery(this).stop().animate({opacity : 1}, 500);
        });
    }
    
    hover_overlay_images();
    
 
/*-----------------------------------------------------------------------------------*/
/*  Portfolio Mini Flexible Slideshow
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {	
		jQuery('.flexslider').each(function() {
        var $this = jQuery(this);
        $this.flexslider({
					animation: "fade",              //String: Select your animation type, "fade" or "slide"
					slideDirection: "vertical",   //String: Select the sliding direction, "horizontal" or "vertical"
					slideshow: <?php if ($autoplay = get_option('of_autoplay')) { echo $autoplay; } else { echo 'true'; } ?>,                //Boolean: Animate slider automatically
					slideshowSpeed: Math.floor(Math.random()*10001) + 3000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
					animationDuration: 2000,         //Integer: Set the speed of animations, in milliseconds
					directionNav: false,             //Boolean: Create navigation for previous/next navigation? (true/false)
					controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
					keyboardNav: false,              //Boolean: Allow slider navigating via keyboard left/right keys
					mousewheel: false,              //Boolean: Allow slider navigating via mousewheel
					prevText: "Previous",           //String: Set the text for the "previous" directionNav item
					nextText: "Next",               //String: Set the text for the "next" directionNav item
					pausePlay: false,               //Boolean: Create pause/play dynamic element
					pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
					playText: 'Play',               //String: Set the text for the "play" pausePlay item
					randomize: false,               //Boolean: Randomize slide order
					slideToStart: 0,                //Integer: The slide that the slider should start on. Array notation (0 = first slide)
					animationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
					pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
					pauseOnHover: true,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
					controlsContainer: "",          //Selector: Declare which container the navigation elements should be appended too. Default container is the flexSlider element. Example use would be ".flexslider-container", "#container", etc. If the given element is not found, the default action will be taken.
					manualControls: "",             //Selector: Declare custom control navigation. Example would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
					start: function(){},            //Callback: function(slider) - Fires when the slider loads the first slide
					before: function(){},           //Callback: function(slider) - Fires asynchronously with each slider animation
					after: function(){},            //Callback: function(slider) - Fires after each slider animation completes
					end: function(){}               //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)					
										
			});
		});
	});


		

/*-----------------------------------------------------------------------------------*/
/*  Scroll to Top by Andre Gagnon
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {
						   
jQuery(window).scroll(function () {
						   
 	var y_scroll_pos = window.pageYOffset;
    var scroll_pos_test = 50;             // set to whatever you want it to be
	
    if(y_scroll_pos > scroll_pos_test) {
        jQuery('.top').fadeIn(1000);
        jQuery('.iphone').children('.top').css('display', 'none !important');
		} else { jQuery('.top').fadeOut(500);
         }
	});

	jQuery('.top').click(function(){
			
			jQuery('html, body').animate({scrollTop:0}, 500, 'easeOutCubic');
			return false;
	});
});


/*-----------------------------------------------------------------------------------*/
/*  Top Widgets Drawer by Andre Gagnon
/*-----------------------------------------------------------------------------------*/
    
  jQuery(function($) {
	var height = $('#top_panel_content').height();
	$('#top_panel_button').click(function() {
		var docHeight = $(document).height();
		var windowHeight = $(window).height();
		var scrollPos = docHeight - windowHeight + height;
		$('#top_panel_content').animate({ height: "toggle"}, 500, 'easeOutCubic');
        $('#toggle_button').toggleClass("downarrow");
        jQuery('#top_panel').removeClass('active');
					jQuery(this).addClass('active');
	});
});


/*-----------------------------------------------------------------------------------*/
/*  Ajax Load Post
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function($){
    $.ajaxSetup({cache:false});
    
    /* Declare Variables */
    var ajaxouter = jQuery('#ajaxouter'); /* Outer Container (with data id = post id) */
    var url = jQuery('#ajaxinner').attr('data-url'); /* Set the post ID from the outer container */
    var $postId = null; 
    var $nextitem = null;
    var $nextId = null; 
    var $prevId = null; 
    var $this = null;
    var $state = 'closed';
     
    $(".flexslider ul.slides li a").live('click', function(e){ e.preventDefault();
       
       /*Set Function Variables */       
        $this = $(this);
        $postId = $($this).attr('data-url');
       	$nextitem = $($this).closest('.portfolioitem').next('.portfolioitem').find('a');
        $previtem = $($this).closest('.portfolioitem').prev('.portfolioitem').find('a');
		$prevId = $($this).closest('.portfolioitem').prev('.portfolioitem').find('a').attr('data-url');
        $nextId = $($this).closest('.portfolioitem').next('.portfolioitem').find('a').attr('data-url');
               
        $('.ajaxloading').fadeIn(500);
       
        if ( $.browser.msie && $.browser.version == '7.0') {			
            $('html,body').parent().animate({scrollTop: $('#loadingcontainer').offset().top}, 2000, 'easeOutCubic');  
        } else {
			$('html,body').animate({scrollTop: $('#loadingcontainer').offset().top}, 2000, 'easeOutCubic');  
        }
                if ($state !== 'closed'){ 
                $('#ajaxcontainer').animate({ height: "toggle"}, 500, 'easeOutCubic');
                }
                ajaxouter.load(url, {
			    id: $postId
			     }, 
                 	function() {
        				if ($state == 'closed'){   
        					
                            $('#ajaxcontainer').animate({ height: "toggle"}, 500, 'easeOutCubic'); 
                                   
                                   /* If there's a previous */
                                    if(typeof $prevId  == 'string') {
                                   		$('a#prev-port').css('display', 'block');
                                    } else {
                                    	$('a#prev-port').css('display', 'none');
                                    } 
                                    
                                    /* If there's a Next*/
                                    if(typeof $nextId  == 'string') {
                                    	$('a#next-port').css('display', 'block');
                                    } else {
                                    	$('a#next-port').css('display', 'none');
                                    }
                                       
        	     		 $state = 'open';
                         
              		 } else {
                     
                    		$('#ajaxcontainer').animate({ height: "toggle"}, 500, 'easeOutCubic');

									/* If there's a previous */
                                    if(typeof $prevId  == 'string') {
                                    	$('a#prev-port').css('display', 'block');
                                    } else {
                                    	$('a#prev-port').css('display', 'none');
                                    } 
                                    
                                    /* If there's a Next*/
                                    if(typeof $nextId  == 'string') {
                                    	$('a#next-port').css('display', 'block');
                                    } else {
                                    	$('a#next-port').css('display', 'none');
                                    } 
                                     
                     }
                     
                       $('.ajaxloading').fadeOut(500);
           		}
            ); 
            
        return false; 
});


jQuery('a#next-port').live('click', function(e){ e.preventDefault();
    
    if(typeof $nextId  == 'string') {
   
   		jQuery('.ajaxloading').fadeIn(500);
    	jQuery('#ajaxcontainer').animate({ height: "toggle"}, 500, 'easeOutCubic');
        
    	     	ajaxouter.load(url, { id: $nextId   }, 
                 	function() {
                    	$this = $nextitem;
                    	$previtem = jQuery($this).closest('.portfolioitem').prev('.portfolioitem').find('a');
                    	$nextitem = jQuery($this).closest('.portfolioitem').next('.portfolioitem').find('a');
                    	$prevId = jQuery($this).closest('.portfolioitem').prev('.portfolioitem').find('a').attr('data-url');
        				$nextId = jQuery($this).closest('.portfolioitem').next('.portfolioitem').find('a').attr('data-url');
                    
                    /* If there's a Next*/
                    if(typeof $nextId  == 'string') {
                    	jQuery('a#next-port').css('display', 'block');
                    } else {
                    	jQuery('a#next-port').css('display', 'none');
                    }
                    
					jQuery('#ajaxcontainer').animate({ height: "toggle"}, 500, 'easeOutCubic');
        			jQuery('.ajaxloading').fadeOut(500);
                    
          });     
    } 
   
});

jQuery('a#prev-port').live('click', function(e){ e.preventDefault();
    
    if(typeof $prevId  == 'string') {
    
   		jQuery('.ajaxloading').fadeIn(500);
    	jQuery('#ajaxcontainer').animate({ height: "toggle"}, 500, 'easeOutCubic');
    	     	
                ajaxouter.load(url, { id: $prevId   },
                 	function() {
                    $this = $previtem;
                    $previtem = jQuery($this).closest('.portfolioitem').prev('.portfolioitem').find('a');
                    $nextitem = jQuery($this).closest('.portfolioitem').next('.portfolioitem').find('a');
                    $prevId = jQuery($this).closest('.portfolioitem').prev('.portfolioitem').find('a').attr('data-url');
        			$nextId = jQuery($this).closest('.portfolioitem').next('.portfolioitem').find('a').attr('data-url');
                    
                    /* If there's a previous */
                    if(typeof $prevId  == 'string') {
                    	jQuery('a#prev-port').css('display', 'block');
                    } else {
                    	jQuery('a#prev-port').css('display', 'none');
                    }
                    
                    jQuery('#ajaxcontainer').animate({ height: "toggle"}, 500, 'easeOutCubic');
					jQuery('.ajaxloading').fadeOut(500);
                    
           });     
    }
   
});


jQuery('a.portfolio-close').live('click', function(e){ 
        e.preventDefault();
        $state = 'closed'; 
        
            if ( jQuery.browser.msie && jQuery.browser.version == '7.0' ) {            
                jQuery('html,body').parent().animate({scrollTop: jQuery('body').offset().top}, 2000, 'easeOutCubic'); 
            } else {
                jQuery('html,body').animate({scrollTop: jQuery('body').offset().top}, 2000, 'easeOutCubic');	  
            }
        
		jQuery('#ajaxcontainer').animate({ height: "toggle"}, 500, 'easeOutCubic', function(){        
  
           jQuery('.ajaxslider').remove(); // so videos stop playing
            
        });
				
});

	<?php if (($slidestate = get_option('of_slideshow_state')) == 'Open') { ?>
    
    	$this = jQuery('.slideshow .portfolioitem:first').children('ul.slides li:first a');
        $initialopen = jQuery('.slideshow .portfolioitem:first').children('ul.slides li:first a').attr('data-url');
        $postId = jQuery($this).attr('data-url');
       	$nextitem = jQuery($this).closest('.portfolioitem').next('.portfolioitem').find('a');
        $previtem = jQuery($this).closest('.portfolioitem').prev('.portfolioitem').find('a');
		$prevId = jQuery($this).closest('.portfolioitem').prev('.portfolioitem').find('a').attr('data-url');
        $nextId = jQuery($this).closest('.portfolioitem').next('.portfolioitem').find('a').attr('data-url');
        
	  		jQuery('.ajaxloading').fadeIn(500);
     			
                ajaxouter.load(url, {
			    id: $initialopen
			     }, 
                 	function() {
        				if ($state == 'closed'){   
        					jQuery('#ajaxcontainer').animate({ height: "toggle"}, 500, 'easeOutCubic'); 
        	     		 $state = 'open';
                         jQuery('a#prev-port').css('display', 'none');
                         jQuery('.ajaxloading').fadeOut(500);
              		 } // endif 
           		} //end function
            ); //ajaxouter   

    <?php } ?>

});


/*-----------------------------------------------------------------------------------*/
/* Filter Portfolio
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {
	jQuery('ul.filter a').click(function() {
		jQuery(this).css('outline','none');
		jQuery('ul.filter .active').removeClass('active');
		jQuery(this).parent().addClass('active');

		var filterVal = jQuery(this).text().toLowerCase().replace(' ','-').replace(' ','-').replace(' ','-').replace(' ','-').replace(' ','-').replace(' ','-');  
        
		if(jQuery(this).hasClass('filterall')) {
			jQuery('.portfolioitem .disable').stop().animate({opacity: 0}, 500, function(){
            jQuery(this).css('display', 'none');
            });
            
		} else {
			jQuery('.portfolioitem .disable').each(function() {
				if(!jQuery(this).hasClass(filterVal)) {
                	jQuery(this).css('display', 'block');
					jQuery(this).stop().animate({opacity: .95}, 500);
				} else {
					jQuery(this).stop().animate({opacity: 0}, 500, function(){jQuery(this).css('display', 'none');});
                    
				}
			});
		}

		return false;
	});
});

/*-----------------------------------------------------------------------------------*/
/* Portfolio Flexible Slider
/*-----------------------------------------------------------------------------------*/

jQuery('.projectslideshow').wmuSlider({
    animation: 'fade',
	animationDuration: 600,
	slideshow: <?php if ($portautoplay = get_option('of_portfolio_autoplay')) { echo $portautoplay; } else { echo 'true'; } ?>, 
	slideshowSpeed: <?php if ($portautoplaydelay = get_option('of_project_autoplay_delay')) { echo $portautoplaydelay.'000'; } else { echo '7000'; } ?>,
	slideToStart: 0,
	navigationControl: true,
	paginationControl: true,
	previousText: 'Previous',
	nextText: 'Next',
	touch: true,
	slide: 'span'
}); 

/*-----------------------------------------------------------------------------------*/
/* FitVid Fluid Video
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function(){
    jQuery(".videocontainer").fitVids();
});


/*-----------------------------------------------------------------------------------*/
/* Coda Slider
/*-----------------------------------------------------------------------------------*/
if(jQuery() .codaSlider){ 	
       jQuery('#coda-slider-1').codaSlider({
           dynamicArrows: false,
           dynamicTabs: false
       });
   };
 
/*-----------------------------------------------------------------------------------*/
/* Form Validation
/*-----------------------------------------------------------------------------------*/
 
jQuery(document).ready(function(){
	jQuery("#contactform").validate();
	jQuery("#quoteform").validate();
	jQuery("#quickform").validate();
    jQuery("#commentsubmit").validate();
});