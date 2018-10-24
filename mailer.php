<?php

      $recipient = null;
      $subject = null;
      $email_content = null;
      $email_headers = null;

//      if(isset($_POST['g-recaptcha-response'])){
//          $captcha=$_POST['g-recaptcha-response'];
//      }
//
//      if(!$captcha){
//          header("Location: https://jmotaylor.com/index.php?success=2#contact-block");
//          exit;
//      }
//        
//    	$secretKey = "6LdBMSITAAAAAG7To3SzmNlU-5lHzN-OXPIRLOGd";
//    	$ip = $_SERVER['REMOTE_ADDR'];
//      $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
//    	$responseKeys = json_decode($response,true);
//    	
//      if(intval($responseKeys["success"]) !== 1) {
//          header("Location: https://jmotaylor.com/index.php?success=-2#contact-block");
//      } else {





          $name = strip_tags(trim($_POST["name"]));
          $name = str_replace(array("\r","\n"),array(" "," "),$name);
          if(isset($_POST['phone'])) {
              $phone = trim($_POST["find-us"]);
          }
          $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
          $message = trim($_POST["message"]);

          
          header("Location: http://localhost/jmotaylor/Portfolio/index.php?name=".$name."#contact-block");  






//          if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
//              header("Location: https://jmotaylor.com/index.php?success=-1#contact-block");
//              exit;
//          }
//          $recipient = "jm@jmotaylor.com";
//          $subject = "JMT-Portfolio - New contact from $name";
//          $email_content = "Name: $name\n";
//          $email_content .= "Email: $email\n\n";
//          if(isset($phone)) {
//              $email_content .= "Phone: $phone\n";    
//          } else {
//              $email_content .= "Phone: not provided";
//          }
//          $email_content .= "Message:\n$message\n";
//          $email_headers = "From: $name <$email>";
//          mail($recipient, $subject, $email_content, $email_headers);
//          header("Location: https://jmotaylor.com/index.php?success=1#contact-block");    









//      }

?>