<?php
session_start();
$name = $_POST['name'];
$login = $_POST['login'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$db = mysqli_connect('crm', 'root', '', 'crm');
$queryLogin = mysqli_query($db, "SELECT * FROM users WHERE login='$login'");
$resLogin = mysqli_fetch_assoc($queryLogin);
if($resLogin == false){
    if($password1 === $password2){
        $queryAdd = mysqli_query($db, "INSERT INTO users (name, login, password) VALUES ('$name', '$login', '$password1')");
        $_SESSION['success'] = '<hr><h3 style="color: green;">Регистрация прошла успешно!</h3><hr>';
        header('location: http://crm/signin.php');
    }else{
        $_SESSION['errorPas'] = '<hr><h3 style="color: red;">Ваш пароль не совпадает!</h3><hr>';
        header('location: http://crm/signup.php');
    }
}else{
    $_SESSION['uniqueLog'] = '<hr><h3 style="color: red;">Такой логин уже существует, выберите другой логин!</h3><hr>';
    header('location: http://crm/signup.php');
}

?>