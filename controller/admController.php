<?php
require_once "controller/sessionController.php";
require_once  "./view/admView.php";
require_once  "./model/usersModel.php";
require_once  "./model/productoModel.php";
require_once  "./model/marcaModel.php";
/**
*
*/
class admController extends sessionController
{
  function __construct()
  {
    parent::__construct();
    $this->view = new admView();
    $this->logueado = new usersView();
    $this->productoModel = new productoModel();
    $this->marcaModel = new marcaModel();
    $this->usuarioModel = new usersModel();
    $this->titulo = "HARDWARE DE PC";
  }
  function index(){
    $usuarios = $this->usuarioModel->GetUsuarios();
    $productos = $this->productoModel->GetProductos();
    $marcas = $this->marcaModel->GetMarcas();
    $this->view->Index($this->titulo,$productos,$marcas,$usuarios);
  }
  function indexLogueado(){
    $usuarios = $this->usuarioModel->GetUsuarios();
    $productos = $this->productoModel->GetProductos();
    $marcas = $this->marcaModel->GetMarcas();
    $this->logueado->indexLogueado($this->titulo,$productos,$marcas,$usuarios);
  }
  function borrarProducto($params) {
    $idProducto = $params[0];
    $this->productoModel->borrarProducto($idProducto);
    header('Location: '.HOMEADMIN);
  }
  function borrarMarca($params) {
    $idMarca = $params[0];
    $this->marcaModel->borrarMarca($idMarca);
    header('Location: '.MARCASADMIN);
  }

  function borrarImagen($params){
    $idProducto = $params[2];
    $img = $params[1];
    $this->productoModel->borrarImagen($idProducto,$img);
    header('Location: '.DETALLEADMIN.'/'.$idProducto);
  }
  function cambiarImagen($params){
    $idProducto = $params[2];
    $img = $params[1];
    $newImg = $_FILES['imagen']['tmp_name'];
    $this->productoModel->cambiarImagen($idProducto,$img,$newImg);
    header('Location: '.DETALLEADMIN.'/'.$idProducto);
  }

  function crearProducto(){
       $nombreProducto = $_POST["nombreProducto"];
       $descripcion = $_POST["descripcionProducto"];
       $precio = $_POST["precio"];
       $marca = $_POST["marca"];
       $img = $_FILES['adjunto']['tmp_name'];
       $this->productoModel->altaProducto($nombreProducto,$descripcion, $precio, $marca, $img);
         header('Location: '.HOMEADMIN);
       }

  function crearMarca(){
    $nombreMarca = $_POST["nombreMarca"];
    $descripcion = $_POST["descripcionMarca"];
    $img = $_FILES['adjunto']['tmp_name'];
    if ($nombreMarca!="" && $descripcion!="") {
      $this->marcaModel->altaMarca($nombreMarca,$descripcion, $img);
      header('Location: '.MARCASADMIN);
    }else{
      echo "error";
    }
  }
  function formAltaProducto(){
    $marcas = $this->marcaModel->GetMarcas();
    $this->view-> formAltaProducto($this->titulo,$marcas);
  }
  function formAltaMarca(){
    $marcas = $this->marcaModel->GetMarcas();
    $this->view-> formAltaMarca($this->titulo,$marcas);
  }
  function filtrarAdmin(){
    if (isset($_POST['filtrarAdmin'])) {
      $categoriaFiltrada = $_POST['filtrarAdmin'];
      $productos = $this->productoModel->GetProductos();
      $marcas = $this->marcaModel->GetMarcas();
      $this->view->productosFiltrados($this->titulo,$marcas,$productos,$categoriaFiltrada);
    }else {
      header('Location: '.HOME);
    }
  }
  function marcas(){
    $marcas = $this->marcaModel->GetMarcas();
    $this->view-> marcas($this->titulo,$marcas);
  }
  function formEditarProducto(){
    $marcas = $this->marcaModel->GetMarcas();
    $productos = $this->productoModel->GetProductos();
    $this->view-> formEditarProducto($this->titulo, $marcas, $productos);
  }
  function editarProducto(){
    $id_producto = $_POST["id_producto"];
    $nombreProducto = $_POST["nombreProducto"];
    $descripcion = $_POST["descripcionProducto"];
    $precio = $_POST["precio"];
    $marca = $_POST["marca"];
    $this->productoModel->editarProducto($nombreProducto,$descripcion, $precio, $_FILES['adjunto']['tmp_name'],$id_producto,$marca);
      header('Location: '.HOMEADMIN);

  }
  function formEditarMarca(){
    $marcas = $this->marcaModel->GetMarcas();
    $this->view-> formEditarMarca($this->titulo, $marcas);
  }
  function editarMarca(){
    $id_marca = $_POST["id_marca"];
    $nombreMarca = $_POST["nombreMarca"];
    $descripcion = $_POST["descripcionMarca"];
    $img = $_FILES['adjunto']['tmp_name'];
    if ($nombreMarca!="" && $descripcion!="" && $id_marca!="") {
      $this->marcaModel->editarMarca($nombreMarca,$descripcion,$id_marca,$img);
      header('Location: '.MARCASADMIN);
    }else{
      echo "error";
    }
  }
  function detalleProducto($params){
    $marcas = $this->marcaModel->GetMarcas();
    $id_producto = $params[0];
    $producto = $this->productoModel->GetProducto($id_producto);
    $this->view->detalleProducto($this->titulo,$marcas,$producto);
  }

}


?>
