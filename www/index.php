<?php

require __DIR__ . '/controllers/NewsController.php';

$controller = new NewsController();
$controller->actionAll();

