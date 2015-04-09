<?php

require __DIR__ . '/models/news.php';

if (isset($_POST['add'])) {
    addOneNews();
}

include __DIR__ . '/views/add.php';

