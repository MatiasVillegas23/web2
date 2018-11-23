<?php

  /*define('HOME','http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/api/index');
  define('LOGIN','http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/api/login');
  define('HOMEADMIN','http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/api/indexAdmin');
  define('MARCASADMIN','http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/api/marcasAdmin');*/

abstract class Api{

  protected $data;

  function __construct(){

    $this->data = file_get_contents("php://input");

  }

  public function json_response($data, $status) {
      header("Content-Type: application/json");
      header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
      return json_encode($data);
  }

  private function _requestStatus($code){
     $status = array(
       200 => "OK",
       404 => "Not found",
       300 => "Task Not found",
       500 => "Internal Server Error"
     );
     return ($status[$code])? $status[$code] : $status[500];
   }

   function getJSONData(){
     //var_dump($this->data);
     return json_decode($this->data);
   }

}
?>
