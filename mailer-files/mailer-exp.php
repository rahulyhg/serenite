<?php

require 'php-mailer/PHPMailerAutoload.php';

session_start();

include_once "sm-constant.php";

include_once "sm-connection.php";

include_once "mainFunctions.php";

$mail = new PHPMailer();
$mail2 = new PHPMailer();
	if($_POST['from']=='checkout_form')

	{
		$mail->Subject='Order Received';
	    $mail2->Subject='Order Confirmed';
$message = '<div style="width:600px;font-size:15px;height:auto">'.

                  '<img src="serenitemattress.com/sanchithftp/mailer-files/logo.png" alt=""/>'.'<br>'.

        '<div style="background-color:white;width:600px;height:1000px;font-size:15px;padding-right:50px;">'.

           '<b>Name:-</b>'.$_POST['name'].'<br>'.

	   '<b>Email:-</b>'.$_POST['email'].'<br>'.

           '<b>Flat-No:-</b>'.$_POST['flat-no'].'<br>'.

           '<b>Colony:-</b>'.$_POST['colony'].'<br>'.

           '<b>Landmark:-</b>'.$_POST['landmark'].'<br>'.

           '<b>Town:-</b>'.$_POST['town'].'<br>'.

           '<b>state:-</b>'.$_POST['state'].'<br>'.

           '<b>Pincode:-</b>'.$_POST['pincode'].'<br>'.

            '<b>Mobile-No:-</b>'.$_SESSION['phone'].'<br>'.

            '<b>Product Details:-</b><br>'.

           '<table  style="border-collapse:collapse; width:100%">
<tr><td style="border:1px solid ;"><b>Product-id</b></td><td style="border:1px solid silver;"><b>Product-title</b></td><td style="border:1px solid silver;"><b>Image</b></td><td style="border:1px solid silver;"><b>Quantity</b></td><td style="border:1px solid silver;"><b>Price</b></td></tr>';

            if(isset($_SESSION['cart_item']))
            {

                $total=0;

               foreach ($_SESSION['cart_item'] as $key => $value) 

               {

                 $id=$key;

                 $row=aGetAllMainByGroupType($key);

                 $total+=$value*$row[0]['price'];

                 $message.='<tr><td style="border:1px solid silver;">'.$id.'</td><td style="border:1px solid silver;">'.$row[0]['title'].'</td><td style="border:1px solid silver"><img height="100px" width="100px"  src="serenitemattress.com/sanchithftp/sm-admin/'.$row[0]['pf_url'].'" /></td><td style="border:1px solid silver;">'.$row[0]['price'].'</td><td style="border:1px solid silver;">'.$value.'</td></tr>';
              }
              $message.='</table>';

              $message.='<b>Total:-</b>'.$total.'</br>'.'<div>'.'</div>';

              $message_user ='<div style="width:600px;font-size:15px;">'.

                  '<img src="serenitemattress.com/sanchithftp/mailer-files/logo.png" alt=""/>'.'<br>'.

    '<div style="background-color:white;width:600px;height:1000px;font-size:15px;padding-right:50px;">'.

                             '<centre>'.

                                         
                             '<b>Name:-</b>'.$_POST['name'].'<br>'.

                             '<b>DELIVERY ADDRESS:-</b>'.'<br>'.

                                                         $_POST['flat-no'].'<br>'.

                                                         $_POST['colony'].'<br>'.

                                                         $_POST['landmark'].'<br>'.

                                                         $_POST['town'].'<br>'.

                                                         $_POST['state'].'<br>'.

                                                         $_POST['pincode'].'<br>'.

                                                         $_SESSION['phone'].'<br>'.

                              '<table  style="border-collapse: collapse; width:100%" ><tr><td style="border:1px solid silver;"><b>Product</b></td><td style="border:1px solid silver;"><b>Image</b></td><td style="border:1px solid silver;"><b>Quantity</b></td><td><b>Price</b></td></tr>';

            if(isset($_SESSION['cart_item']))

            {

               $total=0;

               foreach ($_SESSION['cart_item'] as $key => $value) 

               {

                 $id=$key;

                 $row=aGetAllMainByGroupType($key);

                 $total+=$value*$row[0]['price'];

                 $message_user.='<tr><td style="border:1px solid silver;">'.$row[0]['title'].'</td><td style="border:1px solid silver"><img height="100px" width="100px" src="serenitemattress.com/sanchithftp/sm-admin/'.$row[0]['pf_url'].'" /></td><td style="border:1px solid silver;">'.$value.'</td><td style="border:1px solid silver;">'.$row[0]['price'].'</td></tr>';

              }

              $message_user.='</table>';

              $message_user.='<b>Total:-</b>'.$total.'</br>'.'<hr>'.'<centre>'.
               '<p style="font-size:15px;padding-left:30px;padding-right:30px;">'.'We are very happy that you chose your mattress at Serenite at By Nagpals .It gives us immense pleasure to serve customers like you and provide them with the satisfaction of sleep when they buy mattress or any products from us .We hope you will keep coming back for more over the years and give us oppurtunities to provide you with better sleep.<br><br>
                          If you feel our service has to be improved or you would like to see a variety of products at our showroom please let us know through our social media platforms.<br><br><br><br>
                          Hoping to serve you at your next purchase.<br>
                          Thanking You <br>
                          Nagpals'.
                          '</p>'.'<br>'.'</centre>'.
              
              '<div float="right" position="absolute" bottom="0" right="0"><address>           
                Hyderabad: Banjara Hills 536,<br>
                Road Number 12 ,<br>
                opposite triumph motorcycle showroom,<br>
                Telangana,<br>
                500034.<br>
             </address></div>'.'</div>'.'</div>';
			 $mail->subject='Order Received';
			 $mail2->subject='Order Confirmed';

        }

     }		

}

if($_POST['from']=='interior_design')
  {

$mail->Subject = 'Request Received For Interior design';
	$mail2->Subject = 'New Request For Interior design';
	  $message='<div style="width:600px;font-size:15px;height:auto">'.

               '<img src="serenitemattress.com/sanchithftp/mailer-files/logo.png" alt=""/>'.'<br>'.

        '<div style="background-color:white;width:600px;height:1000px;font-size:15px;padding-right:50px;">'.

		          '<h1>Interior Design</h1>'.

		          '<b>Name:-</b>'.$_POST['name'].'<br>'.

              '<b>Email:-</b>'.$_POST['email'].'<br>'.
		   
                '<b>Clients:-</b>'.$_POST['clients'].'<br>'.
              
              '<b>Mobile-No:-</b>'.$_SESSION['phone'].'<br>'.
 
            '</div>'.'</div>';
		   
	  $message_user='<div style="width:600px;font-size:15px;height:auto">'.

                    '<img src="serenitemattress.com/sanchithftp/mailer-files/logo.png" alt=""/>'.'<br>'.

       '<div style="background-color:white;width:600px;height:1000px;font-size:15px;padding-right:50px;">'.
                   
                   '<centre>'.
                    
                    '<p>We have received your request and please wait for our response</p><br><br><br>'.'</centre>'.
					
			'<div float="right" position="absolute" bottom="0" right="0"><address>           
                Hyderabad: Banjara Hills 536,<br>
                Road Number 12 ,<br>
                opposite triumph motorcycle showroom,<br>
                Telangana,<br>
                500034.<br>
             </address></div>'.
             '</div>'.'</div>';
					
  }
	 
 if($_POST['from']=='partner_with_us')

 {
 $mail->Subject = 'Request Received';
	$mail2->Subject='New Request For PartnerWithUs';
	 $message = '<div style="width:600px;font-size:15px;height:auto">'.

                  '<img src="serenitemattress.com/sanchithftp/mailer-files/logo.png" alt=""/>'.
                             '<br>'.

				'<div style="background-color:white;width:600px;height:1000px;font-size:15px;padding-right:50px;">'.
               
               '<h1>Partner With Us</h1>'.

	 
	 
			     '<b>Name:-</b>'.$_POST['name_of_company'].'<br>'.
	 
				'<b>Email:-</b>'.$_POST['email'].'<br>'.

				'<b>Contact Name:-</b>'.$_POST['contact_name'].'<br>'.

				'<b>Years in industry:-</b>'.$_POST['years_in_industry'].'<br>'.

				'<b>Expectation:-</b>'.$_POST['expectation'].'<br>'.
	 
				'<b>Mobile-No:-</b>'.$_SESSION['phone'].'<br>'.'</div>'.'</div>';





             $message_user ='<div style="width:600px;font-size:15px;">'.

                             '<img src="serenitemattress.com/sanchithftp/mailer-files/logo.png" alt=""/>'.
                             '<br>'.

							'<div style="background-color:white;width:600px;height:1000px;font-size:15px;padding-right:50px;">'.

                             
							'<centre>'.
							'<p style="font-size:15px;padding-left:30px;padding-right:30px;">'.
							'Thanks for the purchase we will be contacting you as fast as possible.
							<br><br><br><br>
							Thanking You <br>
							Nagpals'.
							'</p>'.'<br>'.'</centre>'.
              
               '<div float="right" position="absolute" bottom="0" right="0"><address>           
                Hyderabad: Banjara Hills 536,<br>
                Road Number 12 ,<br>
                opposite triumph motorcycle showroom,<br>
                Telangana,<br>
                500034.<br>
             </address></div>'.'</div>'.'</div>';

        
}

 if($_POST['from']=='corporate_purchase')

	{
$mail->Subject='Request Received';
$mail2->Subject='New Request For Corporate Purchase';

$message = '<div style="width:600px;font-size:15px;height:auto">'.

            '<img src="serenitemattress.com/sanchithftp/mailer-files/logo.png" alt=""/>'.'<br>'.

  '<div style="background-color:white;width:600px;height:1000px;font-size:15px;padding-right:50px;">'.

			'<b>Name:-</b>'.$_POST['name_of_company'].'<br>'.
			
			'<b>Email:-</b>'.$_POST['email'].'<br>'.

           '<b>Point of contact:-</b>'.$_POST['point_of_contact'].'<br>'.

           '<b>Requirement:-</b>'.$_POST['requirement'].'<br>'.

           '<b>Approx quantity:-</b>'.$_POST['approx_quantity'].'<br>'.

           '<b>Date to contact:-</b>'.$_POST['date_to_contact'].'<br>'.

             '<b>time to contact:-</b>'.$_POST['time_to_contact'].'<br>'.

           '<b>Expectation:-</b>'.$_POST['expectation'].'<br>'.

            '<b>Mobile-No:-</b>'.$_SESSION['phone'].'<br>'.'</div>'.'</div>';





            $message_user.='<div style="width:600px;font-size:15px;">'.

                        '<img src="serenitemattress.com/sanchithftp/mailer-files/logo.png" alt=""/>'.'<br>'.

        '<div style="background-color:white;width:600px;height:1000px;font-size:15px;padding-right:50px;">'.

                             '<centre>'.


                '<p style="font-size:15px;padding-left:30px;padding-right:30px;">'.
                       'Thanks for the purchase we will be contacting you as fast as possible.
                 <br><br><br><br>
                          Thanking You <br>
                          Nagpals'.
                          '</p>'.'<br>'.'</centre>'.
              

              '<div float="right" position="absolute" bottom="0" right="0"><address>           
                Hyderabad: Banjara Hills 536,<br>
                Road Number 12 ,<br>
                opposite triumph motorcycle showroom,<br>
                Telangana,<br>
                500034.<br>
             </address></div>'.
			  '</div>'.'</div>';

	}

if($_POST['from']=='book_a_visit')

  {
$mail->Subject = 'Request Received';
	$mail2->Subject = 'New Booking Received For Visiting';
$message = '<div style="width:600px;font-size:15px;height:auto">'.

           '<img src="serenitemattress.com/sanchithftp/mailer-files/logo.png" alt=""/>'.'<br>'.

        '<div style="background-color:white;width:600px;height:1000px;font-size:15px;padding-right:50px;">'.

           '<hr>'.'<h1>Book A Visit</h1>'.

			     '<b>Name:-</b>'.$_POST['name'].'<br>'.

           '<b>Email:-</b>'.$_POST['email'].'<br>'.

           '<b>Location of visit:-</b>'.$_POST['location'].'<br>'.

           '<b>Date of contact:-</b>'.$_POST['date_to_contact'].'<br>'.

           '<b>Mobile-No:-</b>'.$_SESSION['phone'].'<br>'.'</div>'.'</div>';



            $message_user='<div style="width:600px;font-size:15px;height:auto">'.

                    '<img src="serenitemattress.com/sanchithftp/mailer-files/logo.png" alt=""/>'.'<br>'.
                    '<centre>'.

          '<div style="background-color:white;width:600px;height:1000px;font-size:15px;padding-right:50px;">'.'<h1>Book A Visit</h1>'.

                    '<p>We have received your request and please wait for our response</p><br><br><br></centre>'.
          '<div float="right" position="absolute" bottom="0" right="0"><address>           
                Hyderabad: Banjara Hills 536,<br>
                Road Number 12 ,<br>
                opposite triumph motorcycle showroom,<br>
                Telangana,<br>
                500034.<br>
             </address></div>'.
                      '</div>'.'</div>';

           

  }

  
if($_POST['from']=='doctor')

  {
$mail->Subject = 'Request Received';
	$mail2->Subject = 'New Request for doctor';
$message = '<div style="width:600px;font-size:15px;height:auto">'.

           '<img src="serenitemattress.com/sanchithftp/mailer-files/logo.png" alt=""/>'.'<br>'.

        '<div style="background-color:white;width:600px;height:1000px;font-size:15px;padding-right:50px;">'.

           '<hr>'.'<h1>Doctor</h1>'.

	   '<b>Name:-</b>'.$_POST['name'].'<br>'.

           '<b>Email(personal):-</b>'.$_POST['email'].'<br>'.

           '<b>Email(official):-</b>'.$_POST['oemail'].'<br>'.

           '<b>Practice at clinic:-</b>'.$_POST['practice'].'<br>'.

           '<b>Years of experience:-</b>'.$_POST['experience'].'<br>'.

           '<b>Location of work:-</b>'.$_POST['working'].'<br>'.
            
           '<b>Any other source of mattress:-</b>'.$_POST['source'].'<br>'.

           '<b>Mobile-No:-</b>'.$_SESSION['phone'].'<br>'.'</div>'.'</div>';



            $message_user='<div style="width:600px;font-size:15px;height:auto">'.

                    '<img src="serenitemattress.com/sanchithftp/mailer-files/logo.png" alt=""/>'.'<br>'.
                    '<centre>'.

          '<div style="background-color:white;width:600px;height:1000px;font-size:15px;padding-right:50px;">'.

                    '<p>We have received your request and please wait for our response</p><br><br><br></centre>'.
          '<div float="right" position="absolute" bottom="0" right="0"><address>           
                Hyderabad: Banjara Hills 536,<br>
                Road Number 12 ,<br>
                opposite triumph motorcycle showroom,<br>
                Telangana,<br>
                500034.<br>
             </address></div>'.
                      '</div>'.'</div>';

           

  }

$mail->IsSMTP();
$mail->Host = "smtpout.secureserver.net";
$mail->Username = "sanchith@serenitemattress.com"; /*Substitute with your real email*/
$mail->Password = "Serenite@123"; /*Substitute with your real password*/
$mail->SMTPAuth = true;
$mail->Port = 80;
$mail->setFrom('sanchith@serenitemattress.com', 'sanchith');
$mail->addAddress('sanchithnagpal@gmail.com', 'sanchith');  
$mail->addAddress('sachith@serenitemattress.com','sanchith');   // Add a recipient
$mail->addReplyTo('sanchith@serenitemattress.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Body    = $message;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

$mail2->IsSMTP();
$mail2->Host = "smtpout.secureserver.net";
$mail2->Username = "sanchith@serenitemattress.com"; /*Substitute with your real email*/
$mail2->Password = "Serenite@123"; /*Substitute with your real password*/
$mail2->SMTPAuth = true;
$mail2->Port = 80;
$mail2->setFrom('sanchith@serenitemattress.com', 'sanchith');
$mail2->addAddress($_POST['email'], $_POST['name']);     // Add a recipient
//$mail2->addAddress('ellen@example.com');               // Name is optional
$mail2->addReplyTo('palojuvasudev05@gmail.com', 'Information');
//$mail2->addCC('cc@example.com');
//$mail2->addBCC('bcc@example.com');

//$mail2->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail2->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail2->isHTML(true);                                  // Set email format to HTML
$mail2->Body    = $message_user;
//$mail2->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail2->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail2->ErrorInfo;
} else {
if(isset($_SESSION['confirm'])||$_SESSION['confirm']==0)
	{
		$_SESSION['confirm']=1;
	}
header("location:/confirm.php");
}
}
?>