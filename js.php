			<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
    
    
     $(function () {
      // Slideshow 1
      $("#slider2").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 700,
		 namespace: "callbacks",
      });
    });
  </script>

			<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
			<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="js/megamenu.js"></script>
			<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
			<script src="js/menu_jquery.js"></script>
			<script src="js/simpleCart.min.js"> </script>
			<script src="js/responsiveslides.min.js"></script>
			<!-- jQuery (necessary JavaScript plugins) -->
			<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>		 