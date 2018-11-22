<?php
require_once  "./view/productoView.php";
require_once  "./model/productoModel.php";
require_once  "./model/marcaModel.php";

class productoController extends Controller
{

  function __construct()
  {
    $this->view = new productoView();
    $this->model = new productoModel();
    $this->marcaModel = new marcaModel();
    $this->titulo = "HARDWARE DE PC";
  }

  function Index(){
    $productos = $this->model->GetProductos();
    $marcas = $this->marcaModel->GetMarcas();
    $this->view->Index($this->titulo,$productos,$marcas);
  }
  public function filtrarProductos(){
    if (isset($_POST['filtrar'])) {
      $categoriaFiltrada = $_POST['filtrar'];
      $productos = $this->model->GetProductos();
      $marcas = $this->marcaModel->GetMarcas();
      $this->view->productosFiltrados($this->titulo,$marcas,$productos,$categoriaFiltrada);
    }else {
      header('Location: '.HOME);
    }
  }
function filtrarProductosLogueado(){
    if (isset($_POST['filtrarLogueado'])) {
      $categoriaFiltrada = $_POST['filtrarLogueado'];
      $productos = $this->model->GetProductos();
      $marcas = $this->marcaModel->GetMarcas();
      $this->view->FiltrarLogueado($this->titulo,$marcas,$productos,$categoriaFiltrada);
    }else {
      print_r("se cayo el sistema");
      //header('Location: '.HOME);
    }
  }
  function mostrarMarcas(){
    $marcas = $this->marcaModel->GetMarcas();
    $this->view->mostrarMarcas($this->titulo,$marcas);
  }

  function mostrarMarcasLogueado(){
    $marcas = $this->marcaModel->GetMarcas();
    $this->view->mostrarMarcasLogueado($this->titulo,$marcas);
  }
  public function detalleProducto($params){
    $id_producto = $params[0];
    $producto =$this->model->GetProducto($id_producto);
    $marca=$this->marcaModel->GetMarca($producto);
    $this->view->detalleProducto($producto[0],$marca[0]);
  }

  public function detalleProductoLogueado($params){
    $id_producto = $params[0];
    $producto =$this->model->GetProducto($id_producto);
    $marca=$this->marcaModel->GetMarca($producto);
    $this->view->detalleProductoLogueado($producto[0],$marca[0]);
  }
}
?>
