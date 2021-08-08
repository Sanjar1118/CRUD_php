<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление</title>
</head>
<body style="background-color: grey; text-align: center;">
    <h1 style="color: #4B0082;">Добавьте нового пользователя</h1>
    <form action="/" method="POST">
        <label for="name">Имя</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="surname">Фамилия</label><br>
        <input type="text" id="surname" name="surname" required><br><br>
        <label for="number">Номер</label><br>
        <input type="number" id="number" name="number" required><br><br>
        <button type="reset">Сбросить</button>
        <button>Добавить</button>
    </form>
    <hr><a href="/"><button>Главная</button></a>
</body>
</html>