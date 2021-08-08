<?php
$id = $_GET['id'];
$db = mysqli_connect('crm', 'root', '', 'crm');
$querySelect = mysqli_query($db, "SELECT * FROM info WHERE id='$id'");
$result = mysqli_fetch_all($querySelect);
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Просмотр</title>
</head>
<body style="background-color: grey;">
    <h1 style="color: #4B0082;" align="center">Полный просмотр</h1>
    <?
    foreach($result as $results){?>
        <div style="width: 280px; height: 190px; margin: 0 auto;">
            <ul>
                <li><h3>ID: <?=$results[0]?></h3></li>
                <li><h3>Имя: <?=$results[1]?></h3></li>
                <li><h3>Фамилия: <?=$results[2]?></h3></li> 
                <li><h3>Номер: <?=$results[3]?></h3></li>
            </ul>
        </div>
    <?}?>
    <div align="center"><a href="/"><button>Назад</button></a></div><hr>
</body>
</html>