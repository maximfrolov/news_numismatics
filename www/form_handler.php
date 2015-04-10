<?php
session_start();

require __DIR__ . '/models/news.php';

if (isset($_POST['add']) &&
    !empty($_POST['title']) &&
    !empty($_POST['text']))
{
    addOneNews();
    header('Location: /add.php');
    exit;
}
else
{
   $_SESSION['error'] = 'Заполните поля формы!';
    header('Location: /add.php');
    exit;
}

