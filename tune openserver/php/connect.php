<?php
$host = 'localhost';
$user = 'root';
$passw = '';
$dbname = 'musicdb';

$link = mysqli_connect($host, $user, $passw, $dbname)
    or die("Не удалось подключиться к БД" . mysqli_error($link));
?>