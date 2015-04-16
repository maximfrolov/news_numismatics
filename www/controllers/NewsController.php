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

    protected function getTemplatePath()
    {
        return __DIR__ . '/../views/news/';
    }

    protected function render($template, $date)
    {
        extract($date);
        require $this->getTemplatePath() . '/' . $template . '.php';
    }
}