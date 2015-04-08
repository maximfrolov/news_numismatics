<?php

include __DIR__ . '/views/add.php';

if (isset($_POST['add'])) {
    require __DIR__ . '/models/news.php';
    addOneNews();
    exit;
}

