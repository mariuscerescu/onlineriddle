<?php
if(isset($_POST['submit'])){

$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "marius.cerescu@gmail.com";
$headers = "From: ".$mailFrom;
$txt = $message;

mail($mailTo, $headers, $txt);
header("Location: thankyou.html");
exit();
}
?>

<!-- index.php?mailsend -->