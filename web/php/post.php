<?php
// принимает данные формы, сохраняет имя пользователя в сессию и перенаправляет браузер обратно на index.php
declare(strict_types=1);

session_start();

$_SESSION['login'] = $_POST['login'];
header('Location: index.php');