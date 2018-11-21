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



  function InsertUsuario(){
    $user = $_POST["nombre"];
    $pass = $_POST["pass"];
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $this->model->InsertarUsuario($user,$hash);
    echo $user."\n";

  }



  }


 ?>
