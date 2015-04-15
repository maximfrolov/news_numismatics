<?php
session_start();

require __DIR__ . '/models/Article.php';

if (isset($_POST['add']) &&
    !empty($_POST['title']) &&
    !empty($_POST['text']))
{
    $this->addOneNews();
    header('Location: /form.php');
    exit;
}
else
{
   $_SESSION['error'] = 'Заполните поля формы!';
    header('Location: /form.php');
    exit;
}

