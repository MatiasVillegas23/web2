{include file="header.tpl"}
{include file="./navAdmin.tpl"}
<h2>Marcas : </h2>
{foreach from=$marcas item=marca}
<ul>
    <img src="{$marca['imagen']}" alt="{$marca['nombre']}">
<nav class="col-md-6">
  <li class="list-group-item">{$marca['nombre']}</li>
    <li class="list-group-item">{$marca['descripcion']}</li>
    <a href="borrarMarca/{$marca['id_marca']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>
  </nav>
  </ul>
{/foreach}
{include file="footer.tpl"}
