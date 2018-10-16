{include file="header.tpl"}
{include file="./navbar.tpl"}
<h2>Productos: </h2>
{foreach from=$productos item=producto}
<ul>
<img src="{$producto['imagen']}" alt="{$producto['nombre']}">
<nav class="col-md-6 col-lg-6">
  <li class="list-group-item"><h3>{$producto['nombre']}<h3></li>
  <li class="list-group-item">{$producto['descripcion']}</li>
    </nav>
  </ul>
{/foreach}
{include file="footer.tpl"}
