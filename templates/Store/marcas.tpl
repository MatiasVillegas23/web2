{include file="header.tpl"}
{include file="./navbar.tpl"}
<h2>Marcas : </h2>
{foreach from=$marcas item=marca}
<ul>
  <img src="{$marca['imagen']}" alt="{$marca['nombre']}">
<nav class="col-md-6 col-lg-6 inline">
  <li class="list-group-item"><h3>{$marca['nombre']}<h3></li>
  <li class="list-group-item">{$marca['descripcion']}</li>
  </nav>
  </ul>


{/foreach}
{include file="footer.tpl"}
