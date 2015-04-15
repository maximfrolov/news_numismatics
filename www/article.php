<?php

require __DIR__ . '/models/NewsArticle.php';

$article = new NewsArticle();
$article->findOnById();

include __DIR__ . '/views/article.php';

