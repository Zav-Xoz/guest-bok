<?
// Страница ИНДЕКС

// Переадресовываем браузер на страницу проверки Авторизации
header("Location: check.php"); exit;
?>

{# ДЛЯ ТЕСТОВ НЕ ЗАБЫТЬ СКРЫТЬ! #}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая Книга</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <h1>Гостевая книга.</h1>
<div class="box">
    <a href="register.php">Регистрация</a>
    <a href="login.php">Авторизация</a>
    <a href="guest_book.php">Гостевая Книга</a>
    <a href="check.php">Страница проверки</a>
</div>
