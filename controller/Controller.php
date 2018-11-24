<?php
/**
 */
 //el server_port, al menos en ubuntu no me lo tomó
 define('HOME','http://'.$_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
 define('LOGIN','http://'.$_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/login');
 define('HOMEADMIN','http://'.$_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/indexAdmin');
 define('HOMELOGUEADO','http://'.$_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/indexLogueado');
 define('MARCASADMIN','http://'.$_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/marcasAdmin');
 define('DETALLEADMIN','http://'.$_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/detalleProductoAdmin');

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
