<?php

require __DIR__ . '/models/NewsArticle.php';

$model = new NewsArticle();
var_dump($model->findAllNews());

//include __DIR__ . '/views/index.php';

