<?php

require __DIR__ . '/../models/NewsArticle.php';

class NewsController
{

    public function actionAll()
    {
        $newsModel = new NewsArticle();
        $items = $newsModel->findAllNews();
        $this->render('all', ['items' => $items]);
    }

}