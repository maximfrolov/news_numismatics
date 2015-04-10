<?php

if (isset($_POST['add'])) {
    header('Location: /views/form.php');
    exit;
}
else {
   echo 'Заполните поля формы!';
}

