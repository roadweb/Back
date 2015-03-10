<?php

class Session
{
    protected $connected;

    public function __construct()
    {
        if(isset($_SESSION['user'])) {
            $this->connected = true;
        } else {
            $this->connected = false;
        }
    }

    public function isConnected()
    {
        return $this->connected;
    }

    public function connection() {
        $_SESSION['user'] = true;
        $this->connected = true;
    }

    public function destroy($index) {
        unset($_SESSION[$index]);
    }
}