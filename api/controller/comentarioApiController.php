<?php

require_once "Api.php";
require_once "./../model/comentariosModel.php";

class comentarioApiController extends Api{

private $model;

  function __construct(){

    parent::__construct();
    $this->model = new comentariosModel();
  }

function cargarComentarios($params = null){
  //echo("hola");
  //echo $params;
  if (isset($params)) {
    $id_producto = $params[0];
    $data = $this->model->getComentarios($id_producto);
  }else {
    return $this->json_response(null, 404);
  }
    if (isset($data)) {
      return $this->json_response($data, 200);
    }
  }

  function setComentario($params = null){
      if (count($params)==1) {
        //  var_dump($params);
        $objetoJSON = $this->getJSONData();
        //var_dump($objetoJSON);
        //var_dump($this->model);
        $r = $this->model->setComentario($objetoJSON->id_producto, $objetoJSON->comentario, $objetoJSON->puntaje, $objetoJSON->userName);
        //var_dump($r);
        //la linea de arriba no anda Y NO SE POR QUE
        if($r == false){
          return $this->json_response($r,300);
        }
        $response = json_encode($objetoJSON);
        return $this->json_response($objetoJSON,200);
        //cargarComentarios();
      }else {
        return $this->json_response("No task created",300);
      }
    }
  }


?>
