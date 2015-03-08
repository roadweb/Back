<?php

class Controller {

    protected $app;

    public function __construct($app) {
        $this->app = $app;
    }

    public function sayHello(){
        echo 'Hello';
    }

}