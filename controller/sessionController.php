<?php
require_once 'Controller.php';
class sessionController extends Controller
{

  function __construct(){
    session_start();
    if(isset($_SESSION["nombre"])){
      if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300)) {
        $this->logout(); // destruye la sesión, y vuelve al login
      }
        $_SESSION['LAST_ACTIVITY'] = time(); // actualiza el último instante de actividad
    }else{
        header('Location: '.LOGIN);
    }
  }

  function logout(){
    session_start();
    session_destroy();
    header('Location: '.LOGIN);
  }

}

 ?>
