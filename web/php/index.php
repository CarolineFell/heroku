<?php
// через include подключает и отображает html-код, содержащий форму, отправляющую данные в post.php
declare(strict_types=1);

session_start();

// если внутри сессии существует не пустая переменная с именем пользователя
if (isset($_SESSION['login']) && $_SESSION['login'] !== '') {
    echo "<div class='profile'>
              <h2>Hi, ".$_SESSION['login']."</h2>
              <a href='exit.php'>Выйти</a>
          </div>";
} else {
    include('../index.html');
}