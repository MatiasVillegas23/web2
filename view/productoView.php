<?php
/**
 *
 */
class productoView
{
  function Index($titulo,$productos,$marcas){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('productos',$productos);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('page','index');
    $smarty->display('templates/Store/index.tpl');

  }
  function productosFiltrados($titulo,$marcas,$productos,$categoriaFiltrada){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('productos',$productos);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('categoriaFiltrada',$categoriaFiltrada);
    $smarty->assign('page','filtrar');
    $smarty->display('templates/Store/filtrados.tpl');
  }
  function FiltrarLogueado($titulo,$marcas,$productos,$categoriaFiltrada){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('productos',$productos);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('categoriaFiltrada',$categoriaFiltrada);
    $smarty->assign('page','filtrarLogueado');
    $smarty->display('templates/User/filtrados.tpl');
  }
  function mostrarMarcas($titulo,$marcas){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('page','mostrarMarcas');
    $smarty->display('templates/Store/marcas.tpl');
  }
  function mostrarMarcasLogueado($titulo,$marcas){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('page','mostrarMarcasLogueado');
    $smarty->display('templates/User/marcas.tpl');
  }
  function detalleProducto($producto,$marca) {
    $smarty = new Smarty();
    $smarty->assign('producto',$producto);
    $smarty->assign('marca',$marca);
    $smarty->assign('page','detalleProducto');
    $smarty->display('templates/Store/detalle.tpl');
  }
  function detalleProductoLogueado($producto,$marca) {
    $smarty = new Smarty();
    $smarty->assign('producto',$producto);
    $smarty->assign('marca',$marca);
    $smarty->assign('page','detalleProductoLogueado');
    $smarty->display('templates/User/detalle.tpl');
    //$smarty->assign('comentario',$comentario);
    //$smarty->assign('isAdmin',$isAdmin);
  }
}

 ?>
