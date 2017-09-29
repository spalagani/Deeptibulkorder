<?php
$to = "india2sree@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
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
$header = "From: noreply@example.com\r\n"; 
$header.= "MIME-Version: 1.0\r\n"; 
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
$header.= "X-Priority: 1\r\n"; 

$status = mail($to, $subject, $message, $header);

if($status)
{ 
    echo '<p>Your mail has been sent!</p>';
} else { 
    echo '<p>Something went wrong, Please try again!</p>'; 
}
?>