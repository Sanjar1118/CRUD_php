<?
$id = $_GET['id'];
$db = mysqli_connect('crm', 'root', '', 'crm');
$query = mysqli_query($db, "SELECT * FROM users WHERE id='$id'");
$res = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменения</title>
</head>
<body style="background-color: grey; text-align: center;">
    <h1 style="color: #4B0082;">Изменить данные</h1>
    <form action="account_ch_ob.php" method="POST">
        <input type="hidden" name="id" value="<?=$res['id']?>">
        <label for="name">Имя</label><br>
        <input type="text" id="name" name="name" value="<?=$res['name']?>" required><br><br>
        <label for="login">Логин</label><br>
        <input type="text" id="login" name="login" value="<?=$res['login']?>" required><br><br>
        <label for="password">Пароль</label><br>
        <input type="text" id="password" name="password" value="<?=$res['password']?>" required><br><br>
        <button>Изменить</button>
    </form><hr>
    <a href="account.php?id=<?=$id?>"><button>Назад</button></a>
</body>
</html>