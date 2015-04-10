<?php

if (isset($_POST['add'])) {
    header('Location: /add.php');
    exit;
}
else {
   echo 'Заполните поля формы!';
}

