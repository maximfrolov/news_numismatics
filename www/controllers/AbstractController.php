<?php


class AbstractController
{
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