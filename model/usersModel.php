<?php
/**
*
*/
class usersModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=hardware;charset=utf8'
    , 'root', '');
  }

  function GetUsuarios(){
    $sentencia = $this->db->prepare( "select * from usuario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  /*function InsertarUsuario($nombre, $pass){
    $sentencia = $this->db->prepare("INSERT INTO usuario(username, pass) VALUES(?,?)");
    $sentencia->execute(array($nombre, $pass));
  }*/

  function GetUser($user){
    $sentencia = $this->db->prepare( "select * from usuario where username=? limit 1");//user name(en el metodo de arriba tambien)
    $sentencia->execute(array($user));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}


?>
