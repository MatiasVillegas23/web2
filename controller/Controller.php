<?php
/**
 *
 */
 define('HOME','http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
 define('LOGIN','http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/login');
 define('HOMEADMIN','http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/indexAdmin');
 define('MARCASADMIN','http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/marcasAdmin');

class Controller
{
  protected $view;
  protected $productoModel;
  protected $marcaModel;
  protected $titulo;
  protected $usuarioModel;
  protected $model;
  // function __construct(argument)
  // {
  //   // code...
  // }
}

 ?>
