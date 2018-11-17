<?php

require_once "sessionApiController.php";
require_once "./../model/productoModel.php";

class adminApiController extends sessionApiController{

private $model;

  function __construct(){

    parent::__construct();
    $this->model = new productoModel();
  }

  function borrarProducto($params = null) {
    if (count($params)==1) {
      $idProducto = $params[0];
      $r = $this->model->borrarProducto($idProducto);
      if ($r == false) {
        return $this->json_response($r,300);
      }
      return $this->json_response($r,200);
    }else {
      return $this->json_response("No task specified",300);
    }
    //header('Location: '.HOMEADMIN);
  }

}
 ?>
