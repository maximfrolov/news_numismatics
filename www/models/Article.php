<?php

require __DIR__ . '/../classes/Db.php';

abstract class Article
{

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
}

