<?php
require_once 'Model.php';
/**
*
*/
class marcaModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  function GetMarcas(){
    $sentencia = $this->db->prepare( "select * from marca");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function GetMarca($producto){
    $id_marca =$producto[0]["id_marca"];
    $sentencia = $this->db->prepare( "select * from marca where id_marca=?");
    $sentencia->execute(array($id_marca));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }
  function altaMarca($nombreMarca,$descripcion){
    $sentencia = $this->db->prepare("INSERT INTO marca(nombre, descripcion) VALUES(?,?)");
    $sentencia->execute(array($nombreMarca,$descripcion));
  }
  function borrarMarca($id_marca){
    $sentencia = $this->db->prepare( "delete from marca where id_marca=?");
    $sentencia->execute(array($id_marca));
  }
  function editarMarca($nombre,$descripcion,$id_marca){
    $sentencia = $this->db->prepare( "update marca set nombre = ?, descripcion = ? where id_marca=?");
    $sentencia->execute(array($nombre,$descripcion,$id_marca));
  }

}

?>
