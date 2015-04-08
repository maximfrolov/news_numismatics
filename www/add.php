<?php

include_once __DIR__ . '/views/add.php';

require_once __DIR__ . '/models/news.php';

if (isset($_POST['add'])) {
    addOneNews();
}
