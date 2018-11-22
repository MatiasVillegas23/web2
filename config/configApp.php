<?php
class ConfigApp{
  public static $ACTION = "action";
  public static $PARAMS = "params";
  public static $ACTIONS = [
    '' => 'productoController#index',
    'index' => 'productoController#index',
    'filtrar' => 'productoController#filtrarProductos',
    'mostrarMarcas' => 'productoController#mostrarMarcas',
    'mostrarMarcasLogueado' => 'productoController#mostrarMarcasLogueado',
    'InsertUsuario' => 'usersController#InsertUsuario',
    'login'=> 'signinController#login',
    'verificarLogin' => 'signinController#verificarLogin',
    'logout' => 'signinController#logout',
    'indexAdmin' => 'admController#index',
    'indexLogueado' => 'admController#indexLogueado',
    'marcasAdmin' => 'admController#marcas',
    'borrarProducto' => 'admController#borrarProducto',
    'borrarImagen' => 'admController#borrarImagen',
    'cambiarImagen' => 'admController#cambiarImagen',
    'borrarMarca' => 'admController#borrarMarca',
    'crearProducto' => 'admController#crearProducto',
    'crearMarca' => 'admController#crearMarca',
    'admTEST' => 'admController#formAltaProducto',
    'administrar' => 'admController#formEditarProducto',
    'editarProducto'=> 'admController#editarProducto',
    'detalleProductoAdmin'=>'admController#detalleProducto',
    'formAltaMarca' => 'admController#formAltaMarca',
    'formEditarMarca' => 'admController#formEditarMarca',
    'editarMarca' => 'admController#editarMarca',
    'filtrarAdmin' => 'admController#filtrarAdmin',
    'filtrarLogueado' => 'productoController#filtrarProductosLogueado',
    'detalleProducto' => 'productoController#detalleProducto',
    'detalleProductoLogueado' => 'productoController#detalleProductoLogueado',
  ];

}
?>
