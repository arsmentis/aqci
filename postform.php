<?php

if (isset($_POST['submit'])) {
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $emailFrom = $_POST['email'];
  $phone = $_POST['phone'];
  $comment = $_POST['comment'];
  $ref = $_SERVER['HTTP_REFERER'];

  $emailTo = "sarah@arsmentis.com"; // production email: info@americanqualitycleaninginc.com
  $subject = "New lead from site";
  $headers = "From: info@americanqualitycleaninginc.com";
  $message = "Lead content: \n\n Name: ".$firstName." ".$lastName."\n\n Email: ".$emailFrom."\n\n Phone Number: ".$phone."\n\n Comments: ".$comment.".";

  mail($emailTo, $subject, $message, $headers);
  header("Location: $ref?submitted=true#contactForm", TRUE, 303);
}

?>
