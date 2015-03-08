<?php

class ManageController extends Controller
{
    public function create()
    {

    }

    public function createView()
    {
        $app = $this->app;
        $this->app->render('layout/header.php');
        $this->app->render('create.php', compact('app'));
        $this->app->render('layout/footer.php');

    }

    public function edit()
    {

    }

    public function delete()
    {

    }
}