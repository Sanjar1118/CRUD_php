<?
session_start();
$id = $_GET['id'];
$db = mysqli_connect('crm', 'root', '', 'crm');
$query = mysqli_query($db, "DELETE FROM users WHERE id='$id'");
$_SESSION['deleted'] = '<hr><h3 style="color: green;">Ваш аккаунт успешно удалено!</h3></hr>';
header('location: http://crm/signin.php');
?>