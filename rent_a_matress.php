<!DOCTYPE html>
<html>
<head>
   <title>Rent a mattress</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
   <script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Button trigger modal -->
<!-- Modal -->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               ×
            </button>
            
         </div>
         
         <div class = "modal-body"    style=" background: linear-gradient(to bottom, #0d7ec4 0%,#0a76b9 19%,#035b98 52%,#045a93 100%);">
            <div class="content">
			<div class="wrap">
				<div class="content-grid">
			<p><img src="images/top.png" title=""></p>
				</div>
				<div class="grid">
		<p><img src="images/coming.png" title=""></p>
		<h3>We are Still Working on it.</h3>
								<div class="clear"></div>
								</div>
		<div class="clear"></div>
		<div class="footer">
			<p class="a"><a href="#"><img src="images/facebook.png" title=""></a></p>
		<p>Copyright © 2017 Serenite By Nagpal's All rights reserved</p>
		</div>
		<div class="clear"></div>
		</div>
		</div>
		<div class="clear"></div>
         </div>
         
         <div class = "modal-footer">
            <p>you will be redirected:- <span id="count">5</span> seconds...</p>
         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
   
</div><!-- /.modal -->

<script>
   $(function () { $('#myModal').modal({
      keyboard: true
   })});
   timer();
   function timer()
		{
			var counter = 5;
			var interval = setInterval(function() {
			counter--;
			$("#count").text(counter);
			// Display 'counter' wherever you want to display it.
			if (counter == 0) {
			// Display a login box
			clearInterval(interval);
			window.location.href = 'index.php';
    return false;
    }
}, 1000);
			
		}
</script>

</body>
</html>
