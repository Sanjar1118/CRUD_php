<? session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body style="background-color: grey; text-align: center;">
    <h1 style="color: #4B0082;">Войдите в свой аккаунт</h1>
    <?
    echo $_SESSION['success']; unset($_SESSION['success']);
    echo $_SESSION['errorLog']; unset($_SESSION['errorLog']);
    echo $_SESSION['errorPas']; unset($_SESSION['errorPas']);
    echo $_SESSION['deleted']; unset($_SESSION['deleted']);
    ?>
    <form action="signin_ob.php" method="POST">
        <label for="login">Введите логин</label><br>
        <input type="text" name="login" id="login" placeholder="Логин" required><br><br>
        <label for="password">Введите пароль</label><br>
        <input type="password" name="password" id="password" placeholder="Пароль" required><br><br>
        <button>Вход</button>
    </form><br>
    <a href="signup.php"><button>Нет аккаунта?</button></a>
    <hr><a href="/"><button>Главная</button></a>
</body>
</html>