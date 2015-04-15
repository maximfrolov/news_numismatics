<?php

require __DIR__ . '/../classes/Db.php';

abstract class Article
{

    /**
     * @var Db $db
     */
    abstract protected function getTable();

    protected function getDb()
    {
        return new Db();
    }

    public function findAllNews()
    {
        return $this->getDb()->dbFindAllByQuery
        (
            'SELECT * FROM ' . $this->getTable() . '
            ORDER BY date
            DESC'
        );
    }

    public function findOnById()
    {
        $id = $_GET['id'];

        return $this->getDb()->dbFindOneByQuery
        (
            'SELECT * FROM ' . $this->getTable() . '
            WHERE id=' . $id
        );
    }

    public function addOneNews()
    {
        $title = mysql_real_escape_string($_POST['title']);
        $text = mysql_real_escape_string($_POST['text']);
        $date = mysql_real_escape_string($_POST['date']);
        $source = mysql_real_escape_string($_POST['source']);
        $author = mysql_real_escape_string($_POST['author']);

        return $this->getDb()->dbAddOneByQuery("
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

