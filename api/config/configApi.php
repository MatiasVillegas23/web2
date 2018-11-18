<?php
class ConfigApi{
  public static $RESOURCE = "resource";
  public static $PARAMS = "params";
  public static $RESOURCES = [
    'detalleProducto#GET' => 'comentarioApiController#cargarComentarios',
    'detalleProducto#POST' => 'comentarioApiController#setComentario'
  ];

}
?>
