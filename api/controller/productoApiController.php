<?php

require_once "Api.php";
require_once "./../model/productoModel.php";

class productoApiController extends Api{

private $model;

  function __construct(){

    parent::__construct();
    $this->model = new productoModel();
  }

function index($params = null){

  if (isset($params)) {
    $id_producto = $params[0];
    $data = $this->model->GetProducto($id_producto);
  }else {
    $data = $this->model->GetProductos();
  }
    if (isset($data)) {
      return $this->json_response($data, 200);
    }else {
      return $this->json_response(null, 404);
    }
  }
}

?>
