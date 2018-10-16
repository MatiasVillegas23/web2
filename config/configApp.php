<?php
class ConfigApp{
  public static $ACTION = "action";
  public static $PARAMS = "params";
  public static $ACTIONS = [
    '' => 'productoController#index',
    'index' => 'productoController#index',
    'detalleProducto'=>'productoController#detalleProducto',
    'filtrar' => 'productoController#filtrarProductos',
    'mostrarMarcas' => 'productoController#mostrarMarcas',
    'login'=> 'signinController#login',
    'verificarLogin' => 'signinController#verificarLogin',
    'logout' => 'signinController#logout',
    'indexAdmin' => 'admController#index',
    'marcasAdmin' => 'admController#marcas',
    'borrarProducto' => 'admController#borrarProducto',
    'borrarMarca' => 'admController#borrarMarca',
    'crearProducto' => 'admController#crearProducto',
    'crearMarca' => 'admController#crearMarca',
    'formAltaProducto' => 'admController#formAltaProducto',
    'formEditarProducto' => 'admController#formEditarProducto',
    'editarProducto'=> 'admController#editarProducto',
    'detalleProductoAdmin'=>'admController#detalleProducto',
    'formAltaMarca' => 'admController#formAltaMarca',
    'formEditarMarca' => 'admController#formEditarMarca',
    'editarMarca' => 'admController#editarMarca',
    'filtrarAdmin' => 'admController#filtrarAdmin',


  ];

}
?>
