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
  function altaMarca($nombreMarca,$descripcion,$img){
    $pathImg = $this->subirImagen($img);
    $sentencia = $this->db->prepare("INSERT INTO marca(nombre, descripcion, imagen) VALUES(?,?,?)");
    $sentencia->execute(array($nombreMarca,$descripcion,$pathImg));
  }
  function borrarMarca($id_marca){
    $sentencia = $this->db->prepare( "delete from marca where id_marca=?");
    $sentencia->execute(array($id_marca));
  }
  function editarMarca($nombre,$descripcion,$id_marca,$imagen){
    $pathImg = $this->subirImagen($imagen);
    $sentencia = $this->db->prepare( "update marca set nombre = ?, descripcion = ?, imagen = ? where id_marca=?");
    $sentencia->execute(array($nombre,$descripcion,$pathImg,$id_marca));
  }
  private function subirImagen($imagen){
      $destino_final = 'img/' . uniqid() . '.jpg';
      move_uploaded_file($imagen,$destino_final);
      return $destino_final;
  }

}

?>
