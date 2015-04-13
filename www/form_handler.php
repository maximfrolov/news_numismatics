<?php
session_start();

require __DIR__ . '/models/news.php';

$news = new News();

if (isset($_POST['add']) &&
    !empty($_POST['title']) &&
    !empty($_POST['text']))
{
    $oneNew = $news->addOneNews();
    header('Location: /form.php');
    exit;
}
else
{
   $_SESSION['error'] = 'Заполните поля формы!';
    header('Location: /form.php');
    exit;
}

