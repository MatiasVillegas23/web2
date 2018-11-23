<?php
require_once ('./libs/Smarty.class.php');
/**
 *
 */
class usersView
{
  function Mostrar($Titulo, $Usuarios){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $smarty->assign('Usuarios',$Usuarios);
    //$smarty->debugging = true;
    $smarty->display('templates/MostrarUsuarios.tpl');
  }

  function indexLogueado($titulo,$productos,$marcas,$usuarios){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('usuarios',$usuarios);
    $smarty->assign('productos',$productos);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('page','indexLogueado');
    $smarty->display('templates/User/index.tpl');
    //$smarty->display('templates/Admin/administrar.tpl');
}
}
 ?>
