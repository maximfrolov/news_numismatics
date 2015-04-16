<?php


abstract class AbstractController
{
    abstract protected function getTemplatePath();

    protected function render($template, $date)
    {
        extract($date);
        require $this->getTemplatePath() . '/' . $template . '.php';
    }
}