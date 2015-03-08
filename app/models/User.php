<?php

class User extends Model
{
    protected $table = 'User';

    public function getUser($username, $password)
    {
        return $this->db->query("SELECT * FROM $this->table WHERE username = '$username' AND password = '$password'")->fetch(PDO::FETCH_ASSOC);
    }
}