<?php


if (isset($_POST['contactform'])){
	
$fname = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];



$to = "coolhightss@gmail.com";
$subject = "Enquiry For Service";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<table border='1'>
<tr>
<td>Full Name</td>
<td>$fname</td>
</tr>

<tr>
<td>Email</td>
<td>$email</td>
</tr>

<tr>
<td>Phone</td>
<td>$phone</td>
</tr>

<tr>
<td>Address</td>
<td>$address</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <coolhightss@gmail.com>' . "\r\n";
$headers .= 'Cc: coolhightss@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
header("Location: thankyou.html");
}
?>