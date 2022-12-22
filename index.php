<?php
$name = $_POST['name'];
$email = $_POST['emailaddress'];
$quantity = $_POST['quantity'];
$number = $_POST['number'];
$date = $_POST['date'];
$to = "vinetechnologies01@gmail.com";
$subject = "VYNESOFT TECHNOLOGIES";
$txt = "Name = ". $name. "\r\nEmail = ". $email. "\r\nQuantity = ". $quantity."\r\nMobile number = ". $number."\r\nIntended Delivery Date = ". $date. "\r\nSubject = ". $subject;
$headers = "From:noreply@ondemandgas.co.zw";
if ($email != NULL){
				mail($to, $subject, $txt, $headers);
}
header("Location:thankyou/thank.html");
?>
