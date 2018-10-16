<?php
require_once 'Model.php';
/**
*
*/
class productoModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  function GetProductos(){

    $sentencia = $this->db->prepare( "select * from producto");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function GetProducto($id_producto){
    $sentencia = $this->db->prepare( "select * from producto where id_producto=?");
    $sentencia->execute(array($id_producto));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function altaProducto($nombreProducto,$descripcion, $precio, $marca, $imagen){
    $sentencia = $this->db->prepare("INSERT INTO producto(nombre, descripcion, precio, id_marca, imagen) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($nombreProducto,$descripcion, $precio, $marca, $imagen));
  }
  function borrarProducto($id_producto){
    $sentencia = $this->db->prepare( "delete from producto where id_producto=?");
    $sentencia->execute(array($id_producto));
  }
  function editarProducto($nombre,$descripcion,$precio,$imagen,$id_producto,$id_marca){
    $sentencia = $this->db->prepare( "update producto set nombre = ?, descripcion = ?, precio = ?, id_marca = ?, imagen = ? where id_producto=?");
    $sentencia->execute(array($nombre,$descripcion,$precio,$imagen,$id_producto,$id_marca));
  }

}

?>
