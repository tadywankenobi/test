<?php
if (isset($_POST["Submit"])){ 
//input box || name, address, e-mail, age
$Name = trim($_POST["Name"]);
$Email = trim($_POST["Email"]);
$Messages = trim($_POST["Messages"]);
$Subject = trim($_POST["Subject"]);





$body = '
<table border="0" cellpadding="10" cellspacing="0" style="border:1px solid #CCCCCC">
  
    <tr>
    <td>Name:</td>
    <td width="*"><input type="text" size="30" value="'.$Name.'"></td>
  </tr>
  <tr>
    <td>Subject:</td>
    <td><input type="text" size="30" value="'.$Subject.'"></td>
  </tr>
  <tr>
    <td>E-mail:</td>
    <td><input type="text" size="30" value="'.$Email.'"></td>
  </tr>
  <tr>
    <td>Messages:</td>
    <td><input type="text" size="100" value="'.$Messages.'"></p></td>
  </tr>
  
  
</table>
';

///*
$to = "info@website.com"; //receiver $to = "info@website.com"; 
$subject = "Contact form"; //subject

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers (optional)
//$headers .= 'From: My website form <'.$Email.'> ' . "\r\n";

mail ($to, $subject, $body, $headers); //php mail function

header ("Location: thankyou.html");  //redirect
//*/echo $body;
}
?>