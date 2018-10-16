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
  function mostrarMarcas(){
    $marcas = $this->marcaModel->GetMarcas();
    $this->view->mostrarMarcas($this->titulo,$marcas);
  }
  public function detalleProducto($params){
    $usuarios = $this->usersModel->getUsuarios();
    $categorias=$this->Categoriasmodel->getCategorias();
    $id_producto = $params[0];
    $imagenes = $this->Imagenmodel->getImagen($id_producto);
    $productos =$this->productoModel->getProducto($id_producto);
    $this->view->detalleProducto($productos,$usuarios,$categorias,$imagenes);
  }
}
?>
