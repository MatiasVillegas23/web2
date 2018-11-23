<?php
require_once ('./libs/Smarty.class.php');

/**
*
*/
class admView
{
  function Index($titulo,$productos,$marcas,$usuarios){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('usuarios',$usuarios);
    $smarty->assign('productos',$productos);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('page','indexAdmin');
    $smarty->display('templates/Admin/index.tpl');
    $smarty->display('templates/Admin/administrar.tpl');
  }
  function productosFiltrados($titulo,$marcas,$productos,$categoriaFiltrada){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('productos',$productos);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('categoriaFiltrada', $categoriaFiltrada);
    $smarty->assign('page','filtrarAdmin');
    $smarty->display('templates/Admin/productosFiltrados.tpl');
  }
  function formAltaProducto($titulo, $marcas){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('page','administrar');
    $smarty->display('templates/Admin/administrar.tpl');
  }
  function formEditarProducto($titulo, $marcas, $productos){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('productos',$productos);
    $smarty->assign('page','administrar');
    $smarty->display('templates/Admin/administrar.tpl');
  }
  function formAltaMarca($titulo, $marcas){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('page','administrar');
    $smarty->display('templates/Admin/altaMarcas.tpl');
  }
  function formEditarMarca($titulo, $marcas){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('page','administrar');
    $smarty->display('templates/Admin/editarMarca.tpl');
  }
  function marcas($titulo, $marcas){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('page','marcasAdmin');
    $smarty->display('templates/Admin/marcas.tpl');
  }
  function detalleProducto($titulo, $marcas,$producto){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('productos',$producto);
    $smarty->assign('page','detalleProductoAdmin');
    //$smarty->assign('imagen',$imagen);
    $smarty->display('templates/Admin/detalleProducto.tpl');
  }
}

?>
