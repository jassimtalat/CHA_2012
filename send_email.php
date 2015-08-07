<?php
 session_start();
 
  if ($_SESSION["captcha"]!=$_POST["security_code"]) {
    // What happens when the CAPTCHA was entered incorrectly
  	header("location:contact.php?error=1");
  } else {
  	 $subject = "CHA Webform: Contact Us";
			$headers = "From: info@cha-properties.com\r\n";
			$headers .= "Reply-To: info@cha-properties.com\r\n";
			$headers .= "Return-Path: info@cha-properties.com\r\n";	
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: TEXT/HTML;\n";
			
			$msg = "";
			$msg .="The following Contact Us form was just submitted:<BR><BR>";
			$msg .="Your name: ".$_REQUEST['y_name']."<BR>";	
			$msg .="Email address: ".$_REQUEST['email_address']."<BR>";	
			$msg .="Company Name: ".$_REQUEST['phone']."<BR>";	
			$msg .="Telephone: ".$_REQUEST['phone']."<BR>";	
			$msg .="Message: <BR>";
			$msg .= nl2br($_REQUEST['msg']);
			
			mail('forms@xenopsi.com', ''.$subject.'',''.$msg.'',$headers);
			mail('sjaved@xenopsi.com', ''.$subject.'',''.$msg.'',$headers);
			header("location: contact.php?sent=1");
  			// Your code here to handle a successful verification
  }
?>