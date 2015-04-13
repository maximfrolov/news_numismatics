<?php

require_once __DIR__ . '/models/news.php';

$news = findAllNews();

include __DIR__ . '/views/index.php';

