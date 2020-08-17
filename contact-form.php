<?php
if(isset($_POST['submit'])){

$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "cerescu.marius@mail.ru";
$headers = "From: ".$mailFrom;
$txt = $message;

mail($mailTo, $headers, $txt);
header("Location: index.php?mailsend");
}
?>

