<?php include 'header.php';?>
<!----><br>
<style>
#form{
    height: 100%;   
    overflow: hidden;
    position: relative;
    margin-top: 2%;
}
.form-control
{
	width:40%;
	margin-left: 25%;
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
    padding-bottom:30px;
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

    border-radius:10px;
 
}
@media (max-width: 1024px)
input, button, select, textarea {

    width: 80%;
    margin-left: 10%;
    margin-bottom: 1%;
    padding: 5px;
    border: 1px solid grey;
    background-color: #fff;
    color: black;
    border-radius: 4px;
    font-size: inherit;
    line-height: inherit;
}


@media (max-width: 768px)
input, button, select, textarea {

    width: 57%;
    margin-left: 10%;
    margin-bottom: 1%;
    padding: 5px;
    border: 1px solid grey;
    background-color: #fff;
    color: black;
    border-radius: 4px;
    font-size: inherit;
    line-height: inherit;
}

</style><div class="container"><ol class="breadcrumb">		  <li><a href="index.php">Home</a></li>		  <li class="active">Interior design</li>		 </ol></div>

<br>
<div  class="container" style="font-size:13pxbackground-color: white">
<div class="jumbotron">
﻿<center>
<h2 style="color:#ff751a">Interior Design</h2>
	</br>
<h4><center>Interior Design Collaborations</center></h4>
    Are you an interior designer, specifier
    or architect wanting to bring serenite 
    to your clients?<br>

    If you are an industry design professional,
    architect or stylist then we encourage you
    to join our serenite Interior Design Program. <br>
    As a member you will be able to work directly
    with your local store to bring 160 years of 
    craftsmanship to your clients and projects<br>
    As a serenite Interior Design Program member
    you will receive a trade discount at any of 
    our store.<br>

﻿     <h4>Quick Links</h4>
﻿        Swedish nature﻿Vividus﻿Our Story﻿Accessories﻿Smart
        sleeping﻿Beds﻿ Interior Design Collaborations.

       Are you an interior designer, specifier or architect<br>
       wanting to bring serenite to your clients?

      If you are an industry design professional, architect 
      or stylist then we encourage you to join our serenite<br>
      Interior Design Program As a member you will be able 
      to work directly with your local store to bring 160
      years of craftsmanship to your clients and projects<br>
      As a serenite Interior Design Program member you will
      receive a trade discount at any of our 200+ stores in
      over 35 countries. <br>

      We have stores located all around the world.
      To locate the serenite store closest to you,
      check out our store locator.<br>
      To be considered for a membership, at least one of the following is required:

   - Current Business or State Profession License, in a Residential or 
     Commercial Design-based business, or the Hospitality industry<br>
   - Proof of current AI or IDI provincial registration
   - Business ID number
   - Proof of current ASID membership<br>
   - Interior design certification (e.g. NCIDQ, CCIDC)
   - W9, Federal ID form, or EIN number
   - Resale of Sales Tax Certificate<br>
   - A professional portfolio or website

﻿   <h4>JOIN US</h4>
   Questions? Feel free to contact us at sanchitnagpal@gmail.com<br>
   </center>
   </div>
   
 </div>
<div  class="col-sm-12 col-md-12 col-lg-12">
<div  id="box" >
           <div id="form">

                 <form class="form-vertcal"  method="post" action="mailer-files/mailer-exp.php">

              <center><h3 class="address">Enter Your Details</h3></center>

               <div class="formgroup" id="name-form">
                    <input class="form-control" placeholder="Name" type="text" id="name" name="name" required autofocus autocomplete="off"/>
               </div>

                <div class="formgroup" id="mobile-form">
                    <input class="form-control" placeholder="Mobile Number" type="mobile-number" id="mobile-number" name="mobile-number" required autocomplete="off"/>
               </div>
 <select  class="form-control" name="clients" >
                         <option value="" selected>main clients</option>
                         <option value="abids">Private</option>
                         <option value="Banjara_hills">Commercial</option>
               </select>
               
               <div class="formgroup" id="company-form">
                     <input class="form-control" placeholder="Company associated with" type="text" id="company" name="company" required autocomplete="off"/>
                </div>


                <div class="formgroup" id="address-form">
                    <input class="form-control" placeholder="Address" type="text" id="address" name="address" autocomplete="off" required />
                </div>
                
                <div class="formgroup" id="pincode-form">
                     <input class="form-control" placeholder="Pincode" type="pincode" id="pincode" name="pincode" required autocomplete="off"/>
                </div>


                 <div class="formgroup" id="email-form">
                     <input class="form-control" placeholder="Email" type="email" id="email" name="email" required autocomplete="off"/>
                </div>
                
               
          <input class="form-control" type="submit" value="Proceed" />
               <input  name="from" value="interior_design" type="hidden"/>
         </form>
    </div>
</div>
</div>
<!---->
<!---->


<?php include 'footer.php';?>

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
            <form class="form-horizontal" action="">
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