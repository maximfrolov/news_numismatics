<?php

class Db
{
    public function __construct()
    {
        $config = include __DIR__ . '/../config/db.php';
        mysql_connect($config['host'], $config['user'], $config['password']);
        mysql_selectdb($config['dbname']);
    }

    public function dbFindAllByQuery($sql)
    {
        $res = mysql_query($sql);
        $ret = [];
        if (false === $res) {
            return false;
        }
        while ($row = mysql_fetch_array($res)) {
            $ret[] = $row;
        }
        return $ret;
    }

    public function dbFindOneByQuery($sql)
    {
        return $this->dbFindAllByQuery($sql)[0];
    }

    public function dbAddOneByQuery($sql)
    {
        return mysql_query($sql);
    }
}





