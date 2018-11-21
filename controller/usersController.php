<?php
require_once  "./view/usersView.php";
require_once  "./model/usersModel.php";
require_once "controller/sessionController.php";

class usersController extends sessionController
{
  protected $view;
  protected $model;
  protected $Titulo;

  function __construct()
  {
    parent::__construct();

    $this->view = new UsersView();
    $this->model = new usersModel();
    $this->Titulo = "Lista de Usuario";
  }

  function MostrarUsuario(){
      $Usuarios = $this->model->GetUsuario();
      $this->view->Mostrar($this->Titulo, $Usuarios);
  }


/*
  function InsertUsuario(){
    $user = $_POST["usuario"];
    $pass = $_POST["pass"];
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $this->model->InsertarUsuario($user,$hash);


  }
*/

  function InsertUsuario()
    {

        if (isset($_POST["usuario"]) && isset($_POST["pass"])) {
            $user           = $_POST["usuario"];
            $pass           = $_POST["pass"];
            $Usuario = $this->model->GetUser($user);

            if (!empty($Usuario)) {
                $this->message = "El usuario ya se encuentra registrado";
                $this->view->mostrarLogin($this->message2);
            } else {
                if (!empty($pass)) {
                    $hash      = password_hash($pass, PASSWORD_DEFAULT);
                    $isAdmin          = '0';
                    $userRegistrado = $this->model->InsertarUsuario($user,$hash,$isAdmin);
                    if (isset($userRegistrado)) {
                        session_start();
                        header('Location: '.HOME);
                    } else {
                        $this->message = "Error, intente nuevamente";
                        $this->view->mostrarLogin($this->message2);
                    }
                }
            }
        } else {
            $this->message = "Datos faltantes";
            $this->view->mostrarLogin($this->message2);
        }
    }
}


 ?>
