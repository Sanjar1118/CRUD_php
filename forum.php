<?
session_start(); 
$id = $_GET['id'];
$db = mysqli_connect('crm', 'root', '', 'crm');
$queryShow = mysqli_query($db, "SELECT * FROM users WHERE id='$id'");
$res = mysqli_fetch_assoc($queryShow);
$querySms = mysqli_query($db, "SELECT * FROM sms");
$result = mysqli_fetch_all($querySms);
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форум</title>
</head>
<body style="background-color: grey; text-align: center;">
    <h1 style="color: #4B0082;">Форум</h1>
    <h2>ID: <?=$res['id']?></h2>
    <h2>Name: <?=$res['name']?></h2><hr>
    <form action="forum_ob.php?id=<?=$id;?>" method="POST">
        <h3>Напишите сообщения</h3>
        <input type="hidden" name="message_id" value="<?=$id?>">
        <textarea name="message" placeholder="Сообщение" required cols="30" rows="10"></textarea><br><br>
        <button>Отправить</button>
    </form><hr>
    <div align="center">
        <?
        $queryJoin = mysqli_query($db, "SELECT * FROM sms LEFT JOIN users ON sms.message_id=users.id");
        $resSms = mysqli_fetch_all($queryJoin);
        foreach ($resSms as $restart){
            echo '<b>'.$restart['4'].': </b>'.$restart['1'].'<br>';
        }
        ?>
    </div><hr>
    <a href="account.php?id=<?=$id;?>"><button>Назад</button></a>
</body>
</html>