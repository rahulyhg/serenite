
        <div class="footer-content">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-4 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="contact.php">Who We Are</a></li>
					 <li><a href="contact.php">Contact Us</a></li>
					 <li><a href="https://drive.google.com/open?id=1rvZbrSAKEmruXz_6BkmNWsTrXEM&usp=sharing">Our Location</a></li>
					 <li><a href="testimonials.php">Testimonials</a></li>							
				 </ul>
			 </div>
			 <div class="col-md-4 ftr-grid">
				 <h4>Customer service</h4>
				 <ul>
					 <li><a href="book_a_visit.php">Book a visit</a></li>
					 <li><a href="terms_of_use.php">Terms of use</a></li>
					 
					 <li><a href="complaint.php">Returns</a></li>			 
				 </ul>
			 </div>
			 <div class="col-md-4 ftr-grid">
				 <h4>Categories</h4>
				 <ul>
					 <li><a href="products.php?type=mattress">> Mattress</a></li>
					 <li><a href="products.php?type=pillows">> Pillows</a></li>
					 <li><a href="interior_design.php">> Interior Design</a></li>
					 <li><a href="corporate_purchase.php">> Corporate Purchase</a></li>	
					 <li><a href="partner_with_us.php">>Partner with us</a></li>							<li><a href="doctor.php">>Doctor</a></li>	
				 </ul>
			 </div>
			 <div class="clearfix"></div> 
		 </div>
	 </div>	
</div>
<div class="footer">
	 <div class="container">		 
		 <div class="copywrite">
			 <p>Copyright © 2017 Serenite By Nagpal's All rights reserved </p>
		 </div>			 
		 </div>
</div>
<!-- jQuery (necessary JavaScript plugins) -->		
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use $(window).load(function() {
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
      // Slideshow 2
      $("#slider2").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 700,
		 namespace: "callbacks",
      });
    });
	
	
  </script>
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
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
						
<script>
var filename="<?php echo $filename;?>";
var li=document.getElementsByClassName("grid");
$('li[0]').addClass('active');
</script>
