<?php
$id = $_GET['id'];
$message_id = $_POST['message_id'];
$message = $_POST['message'];
$db = mysqli_connect('crm', 'root', '', 'crm');
$query = mysqli_query($db, "INSERT INTO sms (message, message_id) VALUES ('$message', '$message_id')");
header('location: http://crm/forum.php?id='.$id);
?>