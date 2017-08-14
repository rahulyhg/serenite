<?php 
session_start();
$_SESSION['otp']=mt_rand(100000,999999);
?>
<!Doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html{
    padding: 0;
    margin: 0;
    font-family: 'Sniglet', cursive;
}
h3
{
	padding-bottom: 15px;
}
#title{
    font-weight: normal;
    font-size: 4em;
    font-family: 'Raleway', sans-serif;
    margin: 0 auto;
    margin-top: 30px;
    width: 500px;
    color: #F90;
    text-align: center;
    overflow: hidden;
}
.form-control
{
    margin-bottom: 10px;
}
/* Animation webkit */
@-webkit-keyframes myfirst
{
    0% {margin-left: -235px}
    90% {margin-left: 100%;}
    100% {margin-left: 100%;}
}

/* Animation */
@keyframes myfirst
{
    0% {margin-left: -235px}
    70% {margin-left: 100%;}
    100% {margin-left: 100%;}
}

header{
    height: 100px;
}

#form{
    height: 100%;   
    overflow: hidden;
    position: relative;
    margin-top: 2%;
}
form{
    color: #F90;
    position: relative;   
}
label, input, textarea{
    display: block; 
    width:100px;
}
input, textarea{  
    border: none;
    border-radius: 20px;
    outline: none;
    padding: 10px;
    font-family: 'Sniglet', cursive;
    font-size: 1em;
    color: #676767;
    transition: border 0.5s;
    -webkit-transition: border 0.5s;
    -moz-transition: border 0.5s;
    -o-transition: border 0.5s;
    border: solid 3px black;  
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
    margin-bottom: 20px;
}
input:focus, textarea:focus{
    border: 3px solid green;  
}

textarea{
    height: 100px;  
    resize: none; 
    overflow: auto;
}
input[type="submit"]{
    background-color: #F90;
    border: solid 3px #F90;
    color: white;
    height: 40px;
    cursor: pointer;
    margin-top: 20px;
    font-size: 1.29em;
    font-family: 'Sniglet', cursive;
    -webkit-transition: background-color 0.5s;
    -moz-transition: background-color 0.5s;
    -o-transition: background-color 0.5s;
    transition: background-color 0.5s;
    margin-bottom: 10px;
}
input[type="submit"]:hover{
    background-color: #e58f0e;
    
}
label{
    font-size: 1.5em;
    margin-top: 20px;
    padding-left: 20px;
}
.formgroup, .formgroup-active, .formgroup-error{
    background-repeat: no-repeat;
    background-position: right bottom;
    background-size: 10.5%;
    transition: background-image 0.7s;
    -webkit-transition: background-image 0.7s;
    -moz-transition: background-image 0.7s;
    -o-transition: background-image 0.7s;
    
    padding-top: 2px;
}

.formgroup{
    background-image: url('http://www.geertjanhendriks.nl/codepen/form/pixel.gif'); 
}
.formgroup-active{
    background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo.png');
}
.formgroup-error{
    background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo-error.png');
    color: red;
}
#box
{
	margin-top:20px;
	margin-bottom: 50px;
	border-radius:10px;
 
}
#second_box
{
    margin-bottom:100px; 
   margin-top:30px; 
   padding-left:80px;
}
</style>

</head>
<body>


<?php include 'header.php';?>
<div class="container">
<ol class="breadcrumb">

		  <li><a href="index.php">Home</a></li>

		  <li class="active">CheckingOut</li>
		 </ol>
</div>


<div  id="box" class="col-sm-12 col-md-6 col-lg-6">
           <div id="form">

                 <form class="form-vertcal" id="waterform" method="post" action="mailer-files/mailer-exp.php">

                        <center><h3>Address</h3></center>

               <div class="formgroup" id="name-form">
                    <input class="form-control" placeholder="Full Name" type="text" id="name" name="name" required autofocus autocomplete="off"/>
               </div>

                <div class="formgroup" id="mobile-form">
                    <input class="form-control" placeholder="Mobile Number" type="mobile-number" id="mobile-number" name="mobile-number" required autocomplete="off"/>
               </div>
                 
                  <div class="formgroup" id="email-form">
                     <input class="form-control" placeholder="Email" type="email" id="email" name="email" required autocomplete="off"/>
                </div>
                
                <div class="formgroup" id="pincode-form">
                     <input class="form-control" placeholder="Pincode" type="pincode" id="pincode" name="pincode" required autocomplete="off"/>
                </div>

                <div class="formgroup" id="flatno-form">
                     <input class="form-control" placeholder="Flat-No/H-No/Floor/Building" type="text" id="Flat-No" name="flat-no" required autocomplete="off" />
                </div>

                <div class="formgroup" id="colony-form">
                     <input class="form-control" placeholder="colony/Street/Locality" type="text" id="colony" name="colony" required autocomplete="off"/>
                </div>

                <div class="formgroup" id="Landmark-form">
                    <input class="form-control" placeholder="Landmark" type="text" id="Landmark" name="landmark" autocomplete="off" required />
                </div>

                <div class="formgroup" id="Town-form">
                     <input class="form-control" placeholder="Town/City" type="text" id="Town" name="town" autocomplete="off" required/>
                </div>

                <div class="formgroup" id="state-form">
                    <input class="form-control" placeholder="state" type="text" id="state" name="state" autocomplete="off" required />
                </div>

          <input class="form-control" type="submit" value="Proceed" />
          <input  name="from" id='from' value="checkout_form" type="hidden"/>
         </form>
    </div>
</div>

<div  id="second_box" class="col-sm-12 col-md-6 col-lg-6">
           <div class="second_box">
                         <br> <br>
                            <ul style="list-style-type:none" >
                                 <br><br>
                                <li>
                                  <p style="color:#F90"> 
                                        <i class="fa fa-map-marker" style="color:#F90"></i>
                                                 <strong>Centres:</strong> </p> 
                                                     <br>

                                       Hyderabad<b>:</b>  Banjara Hills 536,<br> Road Number 12 ,<br>opposite triumph motorcycle showroom<br>
                                         Telangana<br> 500034<br><br>
                                </li>

                                <li>
                                    <p style="color:#F90"> 
                                         <i class="fa fa-phone" style="color:#F90"></i>
                                          <strong>Phone:</strong>  </p>

                                          +91 7093802367
                                </li>
                                          <br>

                                <li>
                                      <p style="color:#F90">
                                            <i class="fa fa-envelope" style="color:#F90"></i> 
                                            <strong>Email:</strong>  </p>
                                            sanchitnagpal@gmail.com
                                </li>
                                            <br>

                                <li>
                                    <p style="color:#F90">
                                            <i class="fa fa-globe" style="color:#F90"></i>
                                             <strong>Website:</strong> </p>
                                             <a href="index.php">Serenite by Nagpal's</a>
                                </li>
                                             <br>
                            </ul>
            </div>                
</div>
<?php include 'footer.php';?>

<!-- Modal -->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            
            <h4 class = "modal-title" id = "myModalLabel">
                Enter the OTP details 
            </h4>
         </div>
         
         <div class = "modal-body">
            <form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">OTP:</label>
					<div class="col-sm-10">          
						<input type="number" class="form-control" id="otp" placeholder="Enter One Time Password" name="otp" autocomplete='off'>
					</div>
				</div>
			</form>
         </div>
         
         <div class = "modal-footer">
		 <p>resend otp in:- <span id="count">30</span> seconds...</p>
		 <button type="button" class="btn btn-success" id='resend' disabled>Resend!</button>
         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
   
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script> 
   $(document).ready(function(){
	   
    $("#mobile-number").blur(function(){
		var inp=$("#mobile-number").val();
		if(inp.length!=10)
		{
			$("#mobile-number").focus();
		}
		function timer()
		{
			var counter = 30;
			var interval = setInterval(function() {
			counter--;
			$("#count").text(counter);
			// Display 'counter' wherever you want to display it.
			if (counter == 0) {
			// Display a login box
			$('#resend').attr('disabled',false);
			clearInterval(interval);
    }
}, 1000);	
		}
        if($("#mobile-number").val()&&inp.length==10)
		{
			timer();
			$(function () { $('#myModal').modal({
			keyboard: false,
			backdrop:false  
			})
			
			});
			var details={'phone':inp};
			$('#resend').click(function(){
						$('#resend').attr('disabled',true);
						timer();
						sendOtp();
					});
			sendOtp();
			$(document).keypress(function(e) {
    if(e.which == 13) {
       $('#otp').blur();
    }
});
			function sendOtp()
			{
			$.ajax({
				url:'way2sms/sendsms.php',
				data:details,
				type:'POST',
				cache:false,
				success: function(result)
				{
					var otp=<?php echo $_SESSION['otp'] ;?>;
					$("#otp").blur(function(){
					if(otp==$("#otp").val())
					{
						$("#myModal").modal("hide");
						$('#mobile-number').attr('disabled',true);
					}
					if(otp!=$("#otp").val())
					{
						
						$(".modal-footer").append("<div class='alert alert-warning'><strong>Warning!</strong>Please enter correct OTP!</div>");
						$('#otp').focus();
					}
					});
				}
    });
	}
		}
});
   });
</script>
</body>

</html>