<?php

class MarkersController extends Controller
{
    public function getAll()
    {
        $model = new Marker();
        $map = $model->getAll();
        $map = json_encode($map);

        $this->app->response->headers->set('Content-Type', 'application/json');
        echo $map;
    }

    public function getOne()
    {
        $model = new Marker();
        $map = $model->getOne();
        $map = json_encode($map);

        $this->app->response->headers->set('Content-Type', 'application/json');
        echo $map;
    }

}