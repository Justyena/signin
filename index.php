<?php

session_start();

require_once('db.php');

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация/Авторизация</title>
</head>
<body>

<!-- <h1>Регистрация</h1>
<form method="post" action="login.php">
    <label for="username">Имя пользователя:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <button type="submit" name="register">Зарегистрироваться</button>
</form> -->

<h1>Авторизация</h1>
<form method="post" action="login.php">
    <label for="username">Имя пользователя:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <button type="submit" name="login">Войти</button>
</form>

</body>
</html>