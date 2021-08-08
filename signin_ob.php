<?php
session_start();
$db = mysqli_connect('crm', 'root', '', 'crm');
$login = $_POST['login'];
$password = $_POST['password'];
$queryShow = mysqli_query($db, "SELECT * FROM users WHERE login='$login'");
$resShow = mysqli_fetch_assoc($queryShow);
if($resShow == true){
    if($resShow['password'] === $password){
        header('location: http://crm/account.php?id='.$resShow['id']);
    }else{
        $_SESSION['errorPas'] = '<hr><h3 style="color: red">Неверный пароль!</h3><hr>';
        header('location: http://crm/signin.php');
    }
}else{
    $_SESSION['errorLog'] = '<hr><h3 style="color: red">Неверный логин!</h3><hr>';
    header('location: http://crm/signin.php');
}

?>