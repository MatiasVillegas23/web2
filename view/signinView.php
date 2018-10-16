<?php
require_once ('./libs/Smarty.class.php');
class signinView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }


  function mostrarLogin($message = ''){

    $this->Smarty->assign('titulo',"Login"); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Message',$message); // El 'Titulo' del assign puede ser cualquier valor

    $this->Smarty->display('templates/Login/login.tpl');
  }
}

 ?>
