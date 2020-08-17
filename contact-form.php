<?php
if(isset($_POST['submit'])){

$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "marius.cerescu@gmail.com";
$headers = "From: ".$mailFrom;
$txt = $message;
$success = "Message sent, thank you for contacting us!";

mail($mailTo, $headers, $txt, $success);
header("Location: index.php?mailsend");
}
?>

