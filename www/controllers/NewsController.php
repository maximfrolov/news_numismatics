<?php


class NewsController
{

    public function actionAll()
    {
        $newsModel = new NewsArticle();
        $items = $newsModel->findAllNews();
        require __DIR__ . '/../views/news/all.php';
    }
}