<?php

class Db
{
    public function __construct()
    {
        mysql_connect('localhost', 'root', '');
        mysql_selectdb('php2test');
    }

    public function dbFindAllByQuery($sql)
    {
        $res = mysql_query($sql);
        $ret = [];
        while (false !== ($row = mysql_fetch_array($res))) {
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





