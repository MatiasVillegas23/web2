<?php
class ConfigApi{
  public static $RESOURCE = "resource";
  public static $PARAMS = "params";
  public static $RESOURCES = [
    'index#GET' => 'productoApiController#index',
    'index#DELETE' => 'adminApiController#borrarProducto',
    'index#POST' => 'adminApiController#crearProducto',
    'index#PUT' => 'adminApiController#modificarProducto'
      ];

}
?>
