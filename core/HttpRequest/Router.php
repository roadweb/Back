<?php

class Router
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    private function request($method, $route, $action)
    {
        return $this->app->$method($route, function () use ($action) {
            $parse = explode('@', $action);
            $controller = $parse[0];
            $method = $parse[1];
            $call = new $controller($this->app);
            call_user_func_array([$call, $method], []);
        });
    }

    public function get($route, $action)
    {
        return $this->request('get', $route, $action);
    }

    public function post($route, $action)
    {
        return $this->request('post', $route, $action);
    }
}