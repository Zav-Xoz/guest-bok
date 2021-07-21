<?php
// Страница авторизации

// Соединямся с БД
require_once('connect.php');
//с функциями php
require_once('function.php');

if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));
        $insip='';
        if(!empty($_POST['not_attach_ip']))
        {
            // Если пользователя выбрал привязку к IP
            // Переводим IP в строку
            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }

        // Записываем в БД новый хеш авторизации и IP
        mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");

        // Ставим куки
        setcookie("id", $data['user_id'], time()+60*60*24*30, "/");
        setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); // httponly !!!

        // Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: check.php"); exit();
    }
    else
    {
        echo "Вы ввели неправильный логин/пароль";
    }
}
?>
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
    <h1>Страница Авторизации.</h1>
<form method="POST">
        <label for="login">Логин</label>
  <input name="login" type="text" required>
<label for="password">Логин</label>
  <input name="password" type="password" required>
     <div class="d-flex">
     <input type="checkbox" name="not_attach_ip" id="checkbox">
        <label for="checkbox">Не прикреплять к IP(не безопасно)</label>
   
    </div> 
<input name="submit" type="submit" value="Войти">
<a href="register.php">Регистрация</a>
</form>
