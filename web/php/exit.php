<?php
// очищает переменную сессию, содержащую имя пользователя, и перенаправляет браузер обратно на index.php
declare(strict_types=1);

session_start();
session_unset();

header('Location: index.php');