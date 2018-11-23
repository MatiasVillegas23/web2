<?php
require_once ('./libs/Smarty.class.php');
class signinView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }


  function mostrarLogin($Message = ''){

    $this->Smarty->assign('titulo',"INGRESA CON TU CUENTA:"); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('titulo2',"REGISTRATE EN LA PAGINA:");
    $this->Smarty->assign('Message',$Message); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->display('templates/Login/login.tpl');
  }
}

 ?>
