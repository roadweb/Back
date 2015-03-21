<?php

class Admin extends Model
{
    protected $table = 'users';

    public function getAdmin($username, $password)
    {
        $request = "SELECT * FROM $this->table WHERE user_log = '$username' AND user_pwd = '$password'";
        return $this->db->query($request)->fetch(PDO::FETCH_ASSOC);
    }
}