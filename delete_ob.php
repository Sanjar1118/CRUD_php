<?php
$id = $_GET['id'];
$db = mysqli_connect('crm', 'root', '', 'crm');
$query = mysqli_query($db, "DELETE FROM info WHERE id='$id'");
header('location: /');
?>