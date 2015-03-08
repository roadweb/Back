<?php

class Model
{

    protected $db;

    public function __construct()
    {
        $db_info = require_once __DIR__ . '/../../app/config.php';
        $this->db = new PDO('mysql:host=' . $db_info['host'] . ';dbname=' . $db_info['db_name'], $db_info['user'], $db_info['password']);

    }

    public function getAll()
    {
        return $this->db->query("SELECT * FROM $this->table")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOne($id)
    {
        return $this->db->query("SELECT * FROM $this->table WHERE id='$id'")->fetch(PDO::FETCH_ASSOC);
    }
}