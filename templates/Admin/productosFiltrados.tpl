{include file="header.tpl"}
{include file="./navAdmin.tpl"}
{foreach from=$productos item=producto}
{if $producto['id_marca'] == $categoriaFiltrada}
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="caption">

      <img src="{$producto['imagen']}" alt="{$producto['nombre']}">
      <h3>{$producto['nombre']} </h3>
      <p>{$producto['descripcion']}</p>
          <a href="borrarProducto/{$producto['id_producto']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>
    </div>
  </div>
  {/if}
  {/foreach}
{include file="footer.tpl"}
