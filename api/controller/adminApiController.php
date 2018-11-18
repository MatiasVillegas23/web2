<?php

require_once 'Api.php';
require_once "./../model/productoModel.php";

class adminApiController extends Api{

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

  function crearProducto($params = null){
    if (count($params)==1) {
      $objetoJSON = $this->getJSONData();
      $r = $this->model->altaProducto($objetoJSON->nombre, $objetoJSON->descripcion, $objetoJSON->precio, $objetoJSON->id_marca, $objetoJSON->imagen);
      //la linea de arriba no anda Y NO SE POR QUE
      if($r == false){
        return $this->json_response($r,300);
      }
      return $this->json_response($r,200);
    }else {
      return $this->json_response("No task created",300);
    }
  }

  function modificarProducto($params = null){

    if (count($params)==1) {
      $idProducto = $params[0];
      $objetoJSON = $this->getJSONData();
      $r = $this->model->editarProducto($objetoJSON->nombre,$objetoJSON->descripcion,$objetoJSON->precio,$objetoJSON->imagen,$idProducto,$objetoJSON->id_marca);
      //como en el crearProducto, la linea de arriba no anda, no se cual es el problema
      return $this->json_response($r,200);
    }else {
      return $this->json_response("No task specified",300);
    }
  }

}

?>
