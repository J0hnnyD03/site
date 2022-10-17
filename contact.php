<?php
// the message
// $msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// send email
//mail("someone@example.com","My subject",$msg);

$to = "atenimento@hmaxti.com.br";
$subject = "[Contato] Website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: webmaster@hmaxti.com.br" . "\r\n" . "CC: hess.rudinho@gmail.com";

foreach ($_POST as $param_name => $param_val) {
    echo "Param: $param_name; Value: $param_val<br />\n";
}

$message = "
<html>
<head>
<title>Solicitação de Contato via Website</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

$this_mail = mail($to,$subject,$message,$headers);

if($this_mail) echo 'sent!';
  else echo error_get_last()['message'];;

?>
