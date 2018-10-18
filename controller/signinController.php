<?php

require_once  "./view/signinView.php";
require_once  "./model/usersModel.php";

class signinController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new signinView();
    $this->model = new usersModel();
    $this->Titulo = "Login";
  }

  function login(){
    $this->view->mostrarLogin();

  }

  function logout(){
    session_start();
    session_destroy();
    header('Location: '.LOGIN);
  }

  function verificarLogin(){
    $user = $_POST["usuario"];
    $pass = $_POST["pass"];
    $dbUser = $this->model->GetUser($user);

    if(isset($dbUser)){

      //if ($user==($dbUser[0]["username"])) {
        if(password_verify($pass, $dbUser[0]["pass"])){
          //mostrar lista de tareas
          session_start();
          $_SESSION["nombre"] = $user;
          header('Location: '.HOMEADMIN);
          //print_r('todo bien');
        }else{
          $this->view->mostrarLogin("pass incorrecta");
        }
      //}
    }else{
      //No existe el usario
      header('Location: '.LOGIN);
      $this->view->mostrarLogin("No existe el usuario");
    }

  }

}

?>
