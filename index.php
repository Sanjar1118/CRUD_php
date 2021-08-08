<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$number = $_POST['number'];
$db = mysqli_connect('crm', 'root', '', 'crm');
$queryAdd = mysqli_query($db, "INSERT INTO info (name, surname, number) VALUES ('$name', '$surname', '$number')");
$queryShow = mysqli_query($db, "SELECT * FROM info");
$resultShow = mysqli_fetch_all($queryShow);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>
<body style="background-color: grey; text-align: center;">
    <h1 style="color: #4B0082;">CRUD-небольшой CRM-чик)</h1>
    <table border="1" bgcolor="PapayaWhip" align="center">
        <tr>
            <td width="25"><b>ID</b></td>
            <td width="100"><b>Имя</b></td>
            <td width="100"><b>Фамилия</b></td>
            <td width="100"><b>Номер</b></td>
            <td width="225"><b>Редактирование</b></td>
        </tr>
    </table>
    <?php
    foreach($resultShow as $result){?>
        <table border="1" bgcolor="PaleGoldenrod" align="center">
        <tr>
            <td width="25"><?=$result[0]?></td>
            <td width="100"><?=$result[1]?></td>
            <td width="100"><?=$result[2]?></td>
            <td width="100"><?=$result[3]?></td>
            <td><a href="view.php?id=<?=$result[0]?>"><button>Посмотр</button></a></td>
            <td><a href="delete_ob.php?id=<?=$result[0]?>"><button>Удалить</button></a></td>
            <td><a href="update.php?id=<?=$result[0]?>"><button>Изменить</button></a></td>
        </tr>
    </table>
    <?}?>
    <br><a href="add.php"><button>Добавление нового пользователя</button></a><br><br><hr>
    <a href="signup.php"><button>Вход в основной сайт</button></a>
</body>
</html>