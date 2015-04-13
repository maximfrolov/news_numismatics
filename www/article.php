<?php

require __DIR__ . '/models/news.php';

$article = new News();
$item = $article->findOnById($_GET['id']);

include __DIR__ . '/views/article.php';
