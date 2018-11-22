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
        $user   = $_POST["usuario"];
        $pass   = $_POST["pass"];
        $dbUser = $this->model->GetUser($user);

        if (isset($dbUser)) {
                    if (!empty($dbUser)&&(password_verify($pass, $dbUser[0]["pass"]))&&$dbUser[0]["isAdmin"] == '1') { //&&$dbUser[0]["isAdmin"]
                        session_start();
                        $_SESSION["nombre"] = $user;
                        header('Location: '.HOMEADMIN);

                  } else {
                        if (!empty($dbUser)&&(password_verify($pass, $dbUser[0]["pass"]))&&$dbUser[0]["isAdmin"] == '0') { //&&(isAdmin[isAdmin]==0)
                        session_start();
                        $_SESSION["nombre"] = $user;
                        header('Location: '.HOMELOGUEADO);
                        //print_r("HOLA MUNDO SOY EL USUARIO COMUN");
                    } else {
                          if (!empty($dbUser)&&(password_verify($pass, $dbUser[0]["pass"]) == false)) {
                        $this->view->mostrarLogin("Contraseña incorrecta");
                      }
                      else {
                        $this->view->mostrarLogin("Datos incorrectos, intentelo de nuevo");
                    }
                }
            }
        }
      }
    }
