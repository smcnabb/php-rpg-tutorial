<?php

class Database
{
    private $_database;

    public function __construct($host, $username, $password, $database)
    {
        if (!$this->_database = mysqli_connect($host, $username, $password, $database))
        {
            die('Unable to connect to the database');
        }
    }

    public function select($sql)
    {
        $query = mysqli_query($this->_database, $sql);
        $data = array();
        while ($row = mysqli_fetch_array($query))
        {
            $data[] = $row;
        }
        return $data;
    }

    public function insert($sql)
    {
        mysqli_query($this->_database, $sql);
        return mysqli_insert_id($this->_database);
    }

    public function update($sql)
    {
        return mysqli_query($this->_database, $sql);
    }

    public function escape($value)
    {
        return mysqli_real_escape_string($this->_database, $value);
    }
}