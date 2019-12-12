<?php
  //Edit here
  $Domain = "www.americanqualitycleaninginc.com";
  $LeadToEmail = "info@americanqualitycleaninginc.com";
  //End edits

  //Do not edit below
  $RedirectToURL = "http://www.".$Domain;
  $MessageFrom = "info@".$Domain;
  $MessageSubject = "New Lead from Website";
  $MessageContent = "Lead content: \n\n";
  foreach($_POST as $name => $value){
    if(is_array($value)){
      foreach($value as $key => $val){
        if(is_array($val)){
          foreach($val as $key2 => $val2){
            if($val2 != '' && $val2 != '1'){
              $MessageContent .= $val2."\n\n";
            }
          }
        }else{
          if($val != ''){
            $MessageContent .= $val."\n\n";
          }
        }
      }
    }
  }
  if(isset($_POST["CompleteForm"])){
    mail($LeadToEmail, $MessageSubject, $MessageContent, "FROM: $MessageFrom");
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>Post Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META http-equiv="refresh" content="5;URL=<?php echo $RedirectToURL; ?>">
<meta name="description" content="" />
<meta name="keywords" content="" />
</head>
<body>
<div style="text-align:center">
<h1>Your message has been sent!</h1>
</div>
</body>
</html>
