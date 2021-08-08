<?php
$id = $_GET['id'];
$db = mysqli_connect('crm', 'root', '', 'crm');
$query = mysqli_query($db, "SELECT * FROM info WHERE id='$id'");
$result = mysqli_fetch_assoc($query);
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление</title>
</head>
<body style="background-color: grey; text-align: center;">
    <h1 style="color: #4B0082;">Измените свою информацию</h1>
    <form action="update_ob.php" method="POST">
        <input type="hidden" name='id' value="<?=$result['id']?>" required>
        <label for="name">Имя</label><br>
        <input type="text" id="name" value="<?=$result['name']?>" name="name" required><br><br>
        <label for="surname">Фамилия</label><br>
        <input type="text" id="surname" value="<?=$result['surname']?>" name="surname" required><br><br>
        <label for="number">Номер</label><br>
        <input type="number" id="number" value="<?=$result['number']?>" name="number" required><br><br>
        <button>Изменить</button>
    </form>
    <hr><a href="/"><button>Главная</button></a>
</body>
</html>