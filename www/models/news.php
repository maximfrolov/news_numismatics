<?php

require __DIR__ . '/../functions/db.php';

function findAllNews()
{
    $sql = 'SELECT * FROM news';
    $ret = dbFindAllByQuery($sql);
    return $ret;
}

function findOneById($id)
{
    $sql = 'SELECT * FROM news WHERE id=' . $id;
    $ret = dbFindOneByQuery($sql);
    return $ret;
}