<?php

class Admin extends Model
{
    protected $table = 'admin';

    public function getAdmin($username, $password)
    {
        $request = "SELECT * FROM $this->table WHERE username = '$username' AND password = '$password'";
        return $this->db->query($request)->fetch(PDO::FETCH_ASSOC);
    }
}