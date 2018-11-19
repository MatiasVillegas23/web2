<?php
class ConfigApi{
  public static $RESOURCE = "resource";
  public static $PARAMS = "params";
  public static $RESOURCES = [
    'comentarios#GET' => 'comentarioApiController#cargarComentarios',
    'comentarios#POST' => 'comentarioApiController#setComentario'
  ];

}
?>
