<? 
session_start(); 
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
    <title>Профиль</title>
</head>
<body style="background-color: grey; text-align: center;">
    <h1 style="color: #4B0082;">Добро пожаловать!</h1>
    <h2>ID: <?=$res['id']?></h2>
    <h2>Name: <?=$res['name']?></h2>
    <h2>Login: <?=$res['login']?></h2>
    <h2>Password: <?=$res['password']?></h2>
    <a href="account_ch.php?id=<?=$id;?>"><button>Изменить профиль</button></a>
    <a href="account_delete.php?id=<?=$id;?>"><button>Удалить профиль</button></a>
    <a href="forum.php?id=<?=$id;?>"><button>Форум</button></a>
    <hr><a href="http://crm/signin.php"><button>Выйти</button></a>
</body>
</html>