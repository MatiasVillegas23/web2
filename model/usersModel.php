<?php
require_once 'Model.php';
/**
*
*/
class usersModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  function GetUsuarios(){
    $sentencia = $this->db->prepare( "select * from usuario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($user, $pass, $isAdmin){
  $sentencia = $this->db->prepare("INSERT INTO usuario(username, pass, isAdmin) VALUES(?,?,?)");
  $sentencia->execute(array($user, $pass, $isAdmin));
  }

  function GetUser($user){
    $sentencia = $this->db->prepare( "select * from usuario where username=? limit 1");//user name(en el metodo de arriba tambien)
    $sentencia->execute(array($user));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function AdminCheck($isAdmin){
    $sentencia = $this->db->prepare( "select * from usuario where isAdmin=? limit 1");
    $sentencia->execute(array($isAdmin));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}


?>
