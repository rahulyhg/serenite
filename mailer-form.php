<?php
require_once('php-mailer/PHPMailerAutoload.php');

// Step 1 - Enter your email address below.
//$email = 'info@incitoacademy.com';

// If the e-mail is not working, change the debug option to 2 | $debug = 2;
$debug = 0;

$subject='test';
$fields = array(
	0 => array(
		'text' => 'Name',
		'val' => $_POST['name']
	),
	1 => array(
		'text' => 'Mobile Number',
		'val' => $_POST['mobile-number']
	),
	2 => array(
		'text' => 'Pincode',
		'val' => $_POST['pincode']
	),
	3=>array(
		 'text' =>'Flat-no'
		 'val'  =>$_POST['Flat-No']
	),
	
	4=>array(
		 'text' =>'colony'
		 'val'  =>$_POST['colony']
	),
	5=>array(
		 'text' =>'Landmark'
		 'val'  =>$_POST['Landmark']
	),
	6=>array(
		 'text' =>'Town'
		 'val'  =>$_POST['Town']
	),
	7=>array(
		 'text' =>'state'
		 'val'  =>$_POST['state']
	),
);

$message = '';

foreach($fields as $field) {
	$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
}

$mail = new PHPMailer(true);

try {

	$mail->SMTPDebug = $debug;                                 // Debug Mode

	// Step 2 (Optional) - If you don't receive the email, try to configure the parameters below:

	$mail->IsSMTP();                                         // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';				       // Specify main and backup server
	$mail->SMTPAuth = true;                                  // Enable SMTP authentication
	$mail->Username = 'palojuvasudev05@gmail.com';                    // SMTP username
	$mail->Password = 'Vasu-2652';                              // SMTP password
	$mail->SMTPSecure = 'tls';                               // Enable encryption, 'ssl' also accepted
	$mail->Port = 587;   								       // TCP port to connect to

	//$mail->AddAddress($email);	 						       // Add another recipient
	//$mail->AddAddress('dharmishta.incito@gmail.com');
    //$mail->AddAddress('utpal@sociomarker.com');
	$mail->AddAddress('stunningvasu@gmail.com');
	$mail->AddAddress('tompooji22@gmail.com');
	          // Add a secondary recipient
	//$mail->AddCC('person3@domain.com', 'Person 3');          // Add a "Cc" address.
	//$mail->AddBCC('person4@domain.com', 'Person 4');         // Add a "Bcc" address.

	$mail->SetFrom('palojuvasudev05@gmail.com','vasudev');
	$mail->AddReplyTo('palojuvasudev05@gmail.com', $_POST['name']);

	$mail->IsHTML(true);                                  // Set email format to HTML

	$mail->CharSet = 'UTF-8';

	$mail->Subject = $subject;
	$mail->Body    = $message;

	$mail->Send();
	$arrResult = array ('response'=>'success');

} catch (phpmailerException $e) {
	$arrResult = array ('response'=>'error','errorMessage'=>$e->errorMessage());
	echo "hello";
} catch (Exception $e) {
	$arrResult = array ('response'=>'error','errorMessage'=>$e->getMessage());
}

if ($debug == 0) {
	echo $arrResult;
}
?>