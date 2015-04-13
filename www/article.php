<?php

require __DIR__ . '/models/news.php';

$article = findOnById();

include __DIR__ . '/views/article.php';

