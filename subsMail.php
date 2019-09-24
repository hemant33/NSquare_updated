<?php

require_once('class.phpmailer.php');
require 'PHPMailerAutoload.php';
//require_once 'contents.html';


$name = $_POST['name'];
$email = $_POST['email'];


// var_dump($_POST); die;

if ($name == '') {
	echo "<div class='alert alert-danger'>";
	echo "<p>Name Field Is Required</p>";
	echo "</div>";
}  else if ($email == '') {
	echo "<div class='alert alert-danger'>";
	echo "<p>Email Field Is Required</p>";
	echo "</div>";
}  else if (!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email)) {
	echo "<div class='alert alert-danger'>";
	echo "<p>Enter Valid Email Id</p>";
	echo "</div>";
} else {
   

			$to = "info@nsquarexperts.com";
			$subject = "Contact Enquiry";
			//  $body="Dear Team,<br>
			// 		we have below enquiry<br>
			// 		Name :".$_POST['name']."<br>
			// 		Mobile :	".$_POST['phone']."<br>
			// 		Email :	".$_POST['email']."<br>
			// 		Description :".$_POST['enquiry_type']."<br>
			// 		Comment :	".$_POST['comments']."<br>
			// 		<br><br> Thank You.";

			$body = "Dear Team,<br>
				we have below enquiry<br>
				Name : " . $_POST['name'] . "<br>
				Email :	" . $_POST['email'] . "<br>
				<br><br> Thank You.";

			//echo "fsdfsfsdfdsfdsfs ".$_POST['enquiry_type'];

			//$enquiry_type=$_POST['enquiry_type'];

			//$subject='Enquiry';

			//echo $enquiry_type; die;
			// if($enquiry_type == 'contact_form'){
			// 	$subject='Contact Enquiry';
			// }else if($enquiry_type == 'pharmceutials_form'){
			// 	$subject='Pharmcutials Enquiry';
			// }else if($enquiry_type == 'healthcare_form'){
			// 	$subject='Health Care Enquiry';
			// }else if($enquiry_type == 'professionalservices_form'){
			// 	$subject='Professional Services Enquiry';
			// }else if($enquiry_type == 'banking_form'){
			// 	$subject='Banking Enquiry';
			// }else if($enquiry_type == 'education_form'){
			// 	$subject='Education Enquiry';
			// }else{
			// 	$subject='Enquiry****'.$enquiry_type;
			// }


			// $emailid='enquiry@nsquarexperts.com';

			$mail = new PHPMailer(); // create a new object
			$mail->IsSMTP(); // set mailer to use SMTP
			//$mail->SMTPDebug = 4;
			//$mail->SMTPSecure = 'ssl';// secure transfer enabled REQUIRED for Gmail
			//$mail->SMTPSecure = 'tls';// secure transfer enabled REQUIRED for Gmail
			$mail->Port = 587; // or 587
			//$mail->Port = 465; // or 587
			//$mail->Port = 587; // or 587
			$mail->Host = 'smtp.office365.com';
			$mail->SMTPAuth = true; // turn on SMTP authentication
			//$mail->Username = 'nsquarexperts28@gmail.com';                 // SMTP username
			//$mail->Password = 'nsquare2017';                           // SMTP password
			$mail->Username = 'info@nsquarexperts.com';                 // SMTP username
			$mail->Password = 'NS-022@mail';                           // SMTP password

			$mail->From 	= 'info@nsquarexperts.com';
			$mail->FromName = 'Nsquare Xperts Info';

			$mail->addAddress($to, ''); // Add a recipient
			//$mail->addBCC('pratik@nsquarexperts.com');
			$mail->addBCC('pushkar.tamhane@nsquarexperts.com');

			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = $subject;
			$mail->Body    = $body;
			//$mail->SMTPDebug = 2;
}
