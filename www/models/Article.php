<?php

abstract class Article {

    public $title;
    public $text;
    public $date;
}

class NewsArticle extends Article {

    public $author;
}

class RepostArticle extends Article {

    public $source;

}

