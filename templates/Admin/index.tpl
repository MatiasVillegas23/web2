{include file="header.tpl"}
{include file="./navAdmin.tpl"}

<h2>PLACAS DE VIDEO: </h2>
{foreach from=$productos item=producto}
<ul class="producto">
  <img src="{$producto['imagen']}" alt="{$producto['nombre']}">
  <nav class="col-md-6 col-lg-6">
    <a  href="detalleProductoAdmin/{$producto['id_producto']}" class="link"></a>
    <li class="list-group-item"><h3>{$producto['nombre']} - ${$producto['precio']}<h3></li>
    <li class="list-group-item">{$producto['descripcion']}</li>
  </nav>
  <a href="borrarProducto/{$producto['id_producto']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>
</ul>

{/foreach}
{include file="footer.tpl"}
