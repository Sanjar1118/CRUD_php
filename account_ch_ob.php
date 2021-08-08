<?
session_start();
$db = mysqli_connect('crm', 'root', '', 'crm');
$id = $_POST['id'];
$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$query = mysqli_query($db, "UPDATE users SET name='$name', login='$login', password='$password' WHERE id='$id'");
header('location: http://crm/account.php?id='.$id);
?>