<?php

require_once __DIR__ . '/../classes/db.php';

class News {

    public $id;
    public $title;
    public $text;
    public $date;
    public $author;
    public $source;

    public function findAllNews()
    {
        $db = new Db;
        return $db->dbFindAllByQuery('
            SELECT *
            FROM news
            ORDER BY date
            DESC
        ');
    }

    public function findOnById($id)
    {
        $db = new Db;
        return $db->dbFindOneByQuery("
            SELECT *
            FROM news
            WHERE id='" . $id . "'
        ");
    }

    public function addOneNews()
    {
        $db = new Db();
        $title  = mysql_real_escape_string($_POST['title']);
        $text   = mysql_real_escape_string($_POST['text']);
        $date   = mysql_real_escape_string($_POST['date']);
        $source = mysql_real_escape_string($_POST['source']);
        $author = mysql_real_escape_string($_POST['author']);

        return $db->dbAddOneByQuery("
            INSERT
            INTO news(
                title,
                text,
                date,
                source,
                author
            )
            VALUES (
                '" . $title . "',
                '" . $text . "',
                '" . $date . "',
                '" . $source . "',
                '" . $author . "'
            )
        ");
    }
}

