<?php

require_once  "./view/signinView.php";
require_once  "./model/usersModel.php";

class signinController
{
    private $view;
    private $model;
    private $Titulo;

    public function __construct()
    {
        $this->view = new signinView();
        $this->model = new usersModel();
        $this->Titulo = "Login";
    }

    public function login()
    {
        $this->view->mostrarLogin();
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: '.LOGIN);
    }

    public function verificarLogin()
    {
        $user = $_POST["usuario"];
        $pass = $_POST["pass"];
        $dbUser = $this->model->GetUser($user);

        if (isset($dbUser)) {
            if (!empty($dbUser)&&(password_verify($pass, $dbUser[0]["pass"]))) {
                session_start();
                $_SESSION["nombre"] = $user;
                header('Location: '.HOMEADMIN);
            } else {
                $this->view->mostrarLogin("Datos incorrectos, intentelo de nuevo");
            }
        }
    }
}
