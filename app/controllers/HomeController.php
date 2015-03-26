<?php

class HomeController extends Controller
{

    /**
     * Page d'index
     * Si non connecté, on attérit sur la page de login
     */
    public function index()
    {
        $session = new Session();
        $connected = $session->isConnected();

        if ($connected) {
            $this->app->render('layout/header.php');
            $this->app->render('home.php');
            $this->app->render('layout/footer.php');
        } else {
            $this->app->render('login.php');
        }
    }

    /**
     * La page de login
     */
    public function login()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $user = new User();
            $test = $user->getAdmin($_POST['username'], $_POST['password']);
            if ($test) {
                $session = new Session();
                $session->connection();
                $this->app->response->redirect($this->app->urlFor('home'));
            } else {
                $this->app->flash('error', 'Les identifiants sont érronés');
                $this->app->response->redirect($this->app->urlFor('home'));
            }
        } else {

        }
    }

    /**
     * La méthode pour se déconnecter
     */
    public function logout()
    {
        $session = new Session();
        $session->destroy('user');
        $this->app->response->redirect($this->app->urlFor('home'));
    }
}