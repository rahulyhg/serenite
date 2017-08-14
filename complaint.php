
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
    width:20%;
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
<div class="container"><ol class="breadcrumb">		  <li><a href="index.php">Home</a></li>		  <li class="active">ComplaintForm</li>		 </ol></div>
<div  id="box" class="col-sm-12 col-md-6 col-lg-6">
           <div id="form">

                 <form class="form-vertcal" id="waterform" method="post" action="mailer-files/mailer-exp.php">

                        <center><h3>Address</h3></center>

               <div class="formgroup" id="name-form">
                  <input class="form-control" placeholder="Full Name" type="text" id="name" name="name" pattern="[A-Za-z]"   title="only alphabets are allowed" required autofocus autocomplete="off"/>
               </div>

                <div class="formgroup" id="mobile-form">
                    <input class="form-control" placeholder="Mobile Number" type="mobile-number" id="mobile-number" name="mobile-number" pattern="[789][0-9]{9}"   title="only numbers are allowed" required autocomplete="off"/>
               </div>

                <div class="formgroup" id="email-form">
                     <input class="form-control" placeholder="Email" type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="Enter a valid email" required autocomplete="off"/>
                </div>

                <div class="formgroup" id="message-form">
                      <textarea class="form-control" id="message" pattern="[a-zA-Z0-9-]"  title="cannot be empty" placeholder="Message" name="message" required autocomplete="off"/></textarea>
                </div>

          <input class="form-control" type="submit" value="Proceed" />

         </form>
    </div>
</div>

<div  id="box" class="col-sm-12 col-md-6 col-lg-6">
           <div class="second_box">
                         
                            <ul style="list-style-type:none" >
                                 <br><br>
                                <li>
                                  <p style="color:#F90"> 
                                        <i class="fa fa-map-marker" style="color:#F90"></i>
                                                 <strong>Centres:</strong> </p> 
                                                     <br>

                                        Hyderabad<b>:</b> shop no-12, Road no-2,Banjara Hills,Hyderabad
                                        Telangana<br><br>
                                </li>

                                <li>
                                    <p style="color:#F90"> 
                                         <i class="fa fa-phone" style="color:#F90"></i>
                                          <strong>Phone:</strong>  </p>

                                          +91 9010637524
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
</body>

</html>
