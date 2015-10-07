// Flex Slider
(function($) {
  $(window).load(function() {
  $('.flexslider').flexslider({
	animation: 'fade',
	animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
	slideshow: true,                //Boolean: Animate slider automatically
	slideshowSpeed: 4500,           //Integer: Set the speed of the slideshow cycling, in milliseconds
	animationSpeed: 700,             //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
	pauseOnHover: true, 
	pauseOnAction:false,
	controlNav: true,
	directionNav: false,
	controlsContainer: '.flex-container'
		});
  
  $('.flexslider2').flexslider({
	animation: 'slide',
	animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
	slideshow: true,                //Boolean: Animate slider automatically
	slideshowSpeed: 4500,           //Integer: Set the speed of the slideshow cycling, in milliseconds
	animationSpeed: 700,             //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
	pauseOnHover: true, 
	pauseOnAction:false,
	controlNav: false,
	directionNav: true,
	controlsContainer: '.flex-container'
		});
  
  $('.flexslider3').flexslider({
	animation: 'slide',
	animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
	slideshow: false,                //Boolean: Animate slider automatically
	slideshowSpeed: 4500,           //Integer: Set the speed of the slideshow cycling, in milliseconds
	animationSpeed: 700,             //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
	pauseOnHover: true, 
	pauseOnAction:false,
	controlNav: false,
	directionNav: true,
	controlsContainer: '.flex-container'
		});
  
  
	});
})(jQuery)