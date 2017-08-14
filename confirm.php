
<?php if($_SESSION['confirm']==0 )
{
header("location:/index.php");
}
else
{
$_SESSION['confirm']=1;
}
?>
<?php include 'header.php';?>
<div class='container'>
<div id="wait" style="display:block;width:250px;height:129px;position:fixed;top:50%;left:30%;padding:2px;z-index:1111111;"><h6>Request Processsing You will Be redirected to main page</h6><img src='ajax-loader.gif' width="64" height="64" /><br></div>
</div>
<br><br><br><b<br><br><br><br><br>
<script>
timer();

   function timer()

		{

			var counter = 10;

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
<?php include 'footer.php';?>
</div>