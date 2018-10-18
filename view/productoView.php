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
    $smarty->display('templates/Store/index.tpl');
  }
  function productosFiltrados($titulo,$marcas,$productos,$categoriaFiltrada){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('productos',$productos);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('categoriaFiltrada',$categoriaFiltrada);
    $smarty->display('templates/Store/productosFiltrados.tpl');
  }
  function mostrarMarcas($titulo,$marcas){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->display('templates/Store/marcas.tpl');
  }
  function detalleProducto($producto,$marca) {
    $smarty = new Smarty();
    $smarty->assign('producto',$producto);
    $smarty->assign('marca',$marca);
    $smarty->display('templates/Store/detalle.tpl');
  }
}

 ?>
