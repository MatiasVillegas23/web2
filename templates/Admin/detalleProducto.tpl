{include file="../header.tpl"}
{include file="./navAdminDetail.tpl"}
{include file="fix.tpl"}
{foreach from=$productos item=producto}
<ul>
    <img src="../{$producto['imagen']}" alt="{$producto['nombre']}">
  <nav class="col-md-6">
    <li class="list-group-item">{$producto['nombre']} - ${$producto['precio']}</li>
    <li class="list-group-item">{$producto['descripcion']}</li>
    <a href="borrarProducto/{$producto['id_producto']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>
    <a href="../indexAdmin"></span>Volver</a>
  </nav>
</ul>
{/foreach}
{include file="footer.tpl"}
