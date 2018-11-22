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

  function InsertUsuario()
    {

        if (isset($_POST["usuario"]) && isset($_POST["pass"])) {
            $user    = $_POST["usuario"];
            $pass    = $_POST["pass"];
            $Usuario = $this->model->GetUser($user);
            //header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

            //print_r($Usuario);
            //var_dump($Usuario);
//(!empty($dbUser)&&(password_verify($pass, $dbUser[0]["pass"]))&&$dbUser[0]["isAdmin"] == '1')

            if ($Usuario[0]["username"] != NULL) {
                $this->Message2 = "El usuario ya se encuentra registrado";
                $this->view->mostrarLogin($this->Message2);
                print_r("22222222222");
            } else {
                if (!empty($pass)) {
                    $hash      = password_hash($pass, PASSWORD_DEFAULT);
                    $isAdmin          = '0';
                    $userRegistrado = $this->model->InsertarUsuario($user,$hash,$isAdmin);
                    print_r("3333333333333");
                          if (isset($userRegistrado)) {
                            session_start();
                            header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
                            print_r("4444444444");
                            } else {
                                $this->Message2 = "Error, intente nuevamente";
                                  $this->view->mostrarLogin($this->Message2);
                                  print_r("555555555555");
                                  }
                                }
                              }
                            }
                                  else {
                                        $this->Message2 = "Datos faltantes";
                                        $this->view->mostrarLogin($this->Message2);
                                        print_r("666666666666");
        }
    }
}


 ?>
