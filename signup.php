<?  session_start();  ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body style="background-color: grey;">
    <h1 style="color: #4B0082;" align="center">Регистрируйтесь</h1><div align="center"><?
    echo $_SESSION['uniqueLog']; unset($_SESSION['uniqueLog']);
    echo $_SESSION['errorPas']; unset($_SESSION['errorPas']);
    ?></div>
    <form action="signup_ob.php" align="center" method="POST">
        <label for="name">Введите имя</label><br>
        <input type="text" id="name" name="name" placeholder="Имя" required><br><br>
        <label for="login">Введите уникальный логин</label><br>
        <input type="text" id="login" name="login" placeholder="Логин" required><br><br>
        <label for="password1">Создайте пароль</label><br>
        <input type="password" id="password1" name="password1" placeholder="Пароль" required><br><br>
        <label for="password2">Повторите пароль</label><br>
        <input type="password" id="password2" name="password2" placeholder="Пароль" required><br><br>
        <button>Создать</button><br><br>
    </form><div align="center">
    <a href="signin.php"><button>Есть аккаунт?</button></a><hr>
    <a href="/"><button>Главная</button></a>
</body>
</html>