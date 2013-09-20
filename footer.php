  
  <script src="javascripts/foundation/foundation.js"></script>
	
	<script src="javascripts/foundation/foundation.abide.js"></script>
	
	<script src="javascripts/foundation/foundation.alerts.js"></script>
	
	<script src="javascripts/foundation/foundation.clearing.js"></script>
	
	<script src="javascripts/foundation/foundation.cookie.js"></script>
	
	<script src="javascripts/foundation/foundation.dropdown.js"></script>
	
	<script src="javascripts/foundation/foundation.forms.js"></script>
	
	<script src="javascripts/foundation/foundation.interchange.js"></script>
	
	<script src="javascripts/foundation/foundation.joyride.js"></script>
	
	<script src="javascripts/foundation/foundation.magellan.js"></script>
	
	<script src="javascripts/foundation/foundation.orbit.js"></script>
	
	<script src="javascripts/foundation/foundation.placeholder.js"></script>
	
	<script src="javascripts/foundation/foundation.reveal.js"></script>
	
	<script src="javascripts/foundation/foundation.section.js"></script>
	
	<script src="javascripts/foundation/foundation.tooltips.js"></script>
	
	<script src="javascripts/foundation/foundation.topbar.js"></script>
	
  
  <script>
	$(document).foundation('orbit', {
	animation: 'slide',
	timer_speed: 10000,
	pause_on_hover: true,
	resume_on_mouseout: false,
	animation_speed: 500,
	stack_on_small: false,
	navigation_arrows: true,
	slide_number: true,
	container_class: 'orbit-container',
	stack_on_small_class: 'orbit-stack-on-small',
	next_class: 'orbit-next',
	prev_class: 'orbit-prev',
	timer_container_class: 'orbit-timer',
	timer_paused_class: 'paused',
	timer_progress_class: 'orbit-progress',
	slides_container_class: 'orbit-slides-container',
	bullets_container_class: 'orbit-bullets',
	bullets_active_class: 'active',
	slide_number_class: 'orbit-slide-number',
	caption_class: 'orbit-caption',
	active_slide_class: 'active',
	orbit_transition_class: 'orbit-transitioning',
	bullets: false,
	timer: true,
	variable_height: false,
	before_slide_change: function(){},
	after_slide_change: function(){}
	});
  </script>
  <script>
  	$(document).ready(function(){
	  	var windowheight = $(window).height();
	  	var contentheight = windowheight - 44; 
	  	var rightcolumnwidth = $('.right-column').width();
	  	var adscreenheight = $(window).height() - 92;
//	  	alert('content height' + contentheight);
//	  	alert('adscreen height' + adscreenheight);
	  	$('.left-column').css("height", contentheight);
	  	$('.right-column').css("height", contentheight);
	  	$('.ad-details').css("height", adscreenheight);
	  		$(window).resize(function(){
	  			var adscreenheight = $(window).height() - 92;
	  			var rightcolumnwidth = $('.right-column').width();
		  		var windowheight = $(window).height();
		  		var contentheight = windowheight - 44;
		  		$('.left-column').css("height", contentheight);
		  		$('.right-column').css("height", contentheight);
		  		$('.ad-details').css("height", adscreenheight);
	  		});
  	});
  </script>
</body>
</html>