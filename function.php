<?php
error_reporting(-1);

//функция экранирования
function shielding (){
    global $db;
    foreach ($_POST as $key => $value){
        $_POST[$key] = mysqli_real_escape_string($db, $value);
    }
}
//функция сохранения в бд
function save_mess(){
    global $db;
//    экранирование--------------------
//    $name = mysqli_real_escape_string($db, $_POST['name']);
//    $text = mysqli_real_escape_string($db, $_POST['text']);
    shielding ();
    extract($_POST);
//   экранирование ---------------------
    $query = "INSERT INTO `gb` (name, text) VALUES ('$name', '$text')";
    mysqli_query($db, $query) or die(mysqli_error($db));
}
//функция выборки из бд
function get_mess(){
    global $db;
    $query = "SELECT * FROM `gb` ORDER BY id DESC";
    $res= mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_all($res,MYSQLI_ASSOC);
}
//функция распечатки массива
function print_arr($arr){
    echo '<pre>'.  print_r($arr, true) .'</pre>';
}

// Функция для генерации случайной строки из Login.php
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}
