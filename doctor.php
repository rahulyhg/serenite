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
	margin-bottom: 10px;
	border-radius:10px;
 
}
.second_box
{
    height:450px;
    width:50%;
    margin-left: 10%;
}
</style>

</head>
<body>


<?php include 'header.php';?>
<div class="container"><ol class="breadcrumb">		  <li><a href="index.php">Home</a></li>		  <li class="active">Doctor's Page</li>		 </ol></div>

<div class="container">

<div  class="container" style="font-size: 13pxbackground-color: white">
﻿<center>
<h2 style="color:#ff751a">For Doctors</h2>
	</br>
    Are you an interior designer, specifier<br>
    or architect wanting to bring serenite <br>
    to your clients?<br>

    If you are an industry design professional,<br>
    architect or stylist then we encourage you<br>
    to join our serenite Interior Design Program. <br>
    As a member you will be able to work directly<br>
    with your local store to bring 160 years of <br>
    craftsmanship to your clients and projects<br>
    As a serenite Interior Design Program member<br>
    you will receive a trade discount at any of <br>
    our store.<br>

﻿     <h4>Quick Links</h4>
﻿        Swedish nature﻿Vividus﻿Our Story﻿Accessories﻿Smart<br>
        sleeping﻿Beds﻿ Interior Design Collaborations<br><br>

       Are you an interior designer, specifier or architect<br>
       wanting to bring serenite to your clients?<br><br>

      If you are an industry design professional, architect <br>
      or stylist then we encourage you to join our serenite<br>
      Interior Design Program As a member you will be able <br>
      to work directly with your local store to bring 160<br>
      years of craftsmanship to your clients and projects<br>
      As a serenite Interior Design Program member you will<br>
      receive a trade discount at any of our 200+ stores in <br>
      over 35 countries. <br>

      We have stores located all around the world. <br>
      To locate the serenite store closest to you,<br>
      check out our store locator.<br><br>
      To be considered for a membership, at least one of the following is required:<br>

   - Current Business or State Profession License, in a Residential or <br>
     Commercial Design-based business, or the Hospitality industry<br>
   - Proof of current AI or IDI provincial registration<br>
   - Business ID number<br>
   - Proof of current ASID membership<br>
   - Interior design certification (e.g. NCIDQ, CCIDC)<br>
   - W9, Federal ID form, or EIN number<br>
   - Resale of Sales Tax Certificate<br>
   - A professional portfolio or website<br><br>

﻿   <h4>JOIN US</h4>
   Questions? Feel free to contact us at sanchitnagpal@gmail.com<br>
   </center>
 </div>

<div  class="col-sm-12 col-md-6 col-lg-6">
           <div id="form">

                 <form class="form-vertcal" id="waterform" method="post" action="mailer-files/mailer-exp.php">

                        <center><h3>Enter Your Details</h3></center>

               <div class="formgroup" id="name-form">
                    <input class="form-control" placeholder="Full Name" type="text" id="name" name="name" required autofocus autocomplete="off"/>
               </div>

                <div class="formgroup" id="mobile-form">
                    <input class="form-control" placeholder="Mobile Number" type="mobile-number" id="mobile-number" name="mobile-number" required autocomplete="off"/>
               </div>
                 
                  <div class="formgroup" id="email-form">
                     <input class="form-control" placeholder="Email(personal)" type="email" id="email" name="email" required autocomplete="off"/>
                </div>

                <div class="formgroup" id="email-form">
                     <input class="form-control" placeholder="Email(official)" type="email" id="email" name="oemail" required autocomplete="off"/>
                </div>
                
                <div class="formgroup" id="practice-form">
                     <input class="form-control" placeholder="practice at clinic/hospital/others " type="text" id="practice" name="practice" required autocomplete="off"/>
                </div>

                <div class="formgroup" id="experience-form">
                     <input class="form-control" placeholder="years of experience" type="number" id="experience" name="experience" required autocomplete="off" />
                </div>

                <div class="formgroup" id="work-form">
                     <input class="form-control" placeholder="location of work" type="text" id="work" name="working" required autocomplete="off"/>
                </div>

                <div class="formgroup" id="source-form">
                    <input class="form-control" placeholder="any other sources for mattress" type="text" id="source" name="source" autocomplete="off" required />
                </div>

          <input class="form-control" type="submit" value="Proceed" />
          <input  name="from" value="doctor" type="hidden"/>
         </form>
    </div>
</div>

<div   class="col-sm-12 col-md-6 col-lg-6">
        
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
<?php include 'footer.php';?>
</div>
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
            <form class="form-horizontal" action="/action_page.php">
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
            alert("please enter a valid mobile number");
        }
        function timer()
        {
            var counter = 30;
            var interval = setInterval(function() {
            counter--;
			$("#otp").focus();
            $("#count").text(counter);
            // Display 'counter' wherever you want to display it.
            if (counter == 0) {
            // Display a login box
            $('#resend').attr('disabled',false);
            clearInterval(interval);
    }
}, 1000);
          	
        }
        $("#otp").keypress(function(e) {
			  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) {
var otp=<?php echo $_SESSION['otp'] ;?>;	  
    e.preventDefault();
	if(otp==$("#otp").val())
                    {
                        $("#myModal").modal("hide");
                        $('#mobile-number').attr('disabled',true);
                    }
    return false;
  }
    
		  });
        if($("#mobile-number").val()&&inp.length==10)
        {
            timer();
            $(function () { $('#myModal').modal({
            keyboard: false,
            backdrop:false  
            })});
			
            var details={'phone':inp};
            $('#resend').click(function(){
                        $('#resend').attr('disabled',true);
                        timer();
                        sendOtp();
                    });
            sendOtp();
			
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
