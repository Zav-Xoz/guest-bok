<?php
error_reporting(-1);
// Соединямся с БД
require_once('connect.php');
require_once('function.php');

if (!empty($_POST)) {
    save_mess();
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

$messages = get_mess();
//проверка моей функцией
//print_arr($messages);
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
<h1> Гостевая книга </h1>
<form action="guest_book.php" method="POST">
    <label for="name">Имя</label>
    <input type="text" name="name" id="name" placeholder="Ведите Имя">
    <label for="text">Текст:</label>
    <textarea type="text" name="text" id="text" rows="10" placeholder="Ведите Сообщение"></textarea>

    <button type="submit">Написать</button>
    <a href="logout.php">Выход</a>
</form>
<?php if (!empty($messages)): ?>
    <?php foreach ($messages as $message): ?>

        <div class="messages">
            <p>Автор : <span><?= $message['name'] ?></span>| Дата: <span><?= $message['date'] ?></span></p>
            <div><?= nl2br(htmlspecialchars($message['text'])) ?></div>
        </div>
    <?php endforeach ?>
<?php endif; ?>
