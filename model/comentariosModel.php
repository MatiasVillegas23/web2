<?php

require_once 'Model.php';

class comentariosModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

function getComentarios($id_producto){

  $sentencia = $this->db->prepare( "select * from comentario where id_producto=?");
  $sentencia->execute(array($id_producto));

  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
}
function setComentario($id_producto,$comentario, $puntaje){
  $sentencia = $this->db->prepare("INSERT INTO comentario(id_producto, comentario, puntaje) VALUES(?,?,?)");
  $sentencia->execute(array($id_producto,$comentario, $puntaje));
  //$lastId = $this->db->lastInsertId();
  //return $this->GetProducto($lastId);
}


}

?>
