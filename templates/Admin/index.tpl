{include file="header.tpl"}
{include file="./navAdmin.tpl"}
<h2>Productos: </h2>
{foreach from=$productos item=producto}
<ul>
  <img src="{$producto['imagen']}" alt="{$producto['nombre']}">
  <nav class="col-md-6">
    <a  href="detalleProductoAdmin/{$producto['id_producto']}"><li class="list-group-item">{$producto['nombre']}</li></a>
    <li class="list-group-item">{$producto['descripcion']}</li>
    <a href="borrarProducto/{$producto['id_producto']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>
  </nav>
</ul>
{/foreach}
{include file="footer.tpl"}
