<?php
$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$number = $_POST['number'];
$db = mysqli_connect('crm', 'root', '', 'crm');
$query = mysqli_query($db, "UPDATE info SET name='$name', surname='$surname', number='$number' WHERE id='$id'");
header('location: /');
?>