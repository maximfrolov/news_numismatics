<?php

require __DIR__ . '/../functions/db.php';

function findAllNews()
{
    $sql = 'SELECT *
            FROM news
            ORDER BY date DESC';
    $ret = dbFindAllByQuery($sql);
    return $ret;
}

function findOneById($id)
{
    $sql = 'SELECT *
            FROM news
            WHERE id=' . $id;
    $ret = dbFindOneByQuery($sql);
    return $ret;
}

function addOneNews()
{
    dbConnect();
    $title  = mysql_real_escape_string($_POST['title']);
    $text   = mysql_real_escape_string($_POST['text']);
    $date   = mysql_real_escape_string($_POST['date']);
    $source = mysql_real_escape_string($_POST['source']);
    $author = mysql_real_escape_string($_POST['author']);

    $sql = "INSERT
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
            )";
    return dbAddOneByQuery($sql);
}
