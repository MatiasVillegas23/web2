<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <ul class="nav navbar-nav">
    <li><a href="/web2/indexLogueado">HOME</a></li>
    <li><a href="/web2/mostrarMarcasLogueado">MARCAS</a></li>
    <li><a href="/web2/logout">CERRAR SESION</a></li>

  </ul>
  {if $page != 'detalleProductoLogueado'}
  <form class="col-md-2 col-lg-2 form-inline" action="filtrarLogueado" method="POST">
    <select name="filtrarLogueado" class="form-control filter">
      <option value="" selected disabled hidden>ELEGI LA MARCA</option>
      {foreach from=$marcas item=marca}
      <option value="{$marca['id_marca']}">{$marca['nombre']}</option>
      {/foreach}
    </select>
    <button class="btn btn-primary btn-sm" type="submit">FILTRAR</button>
    </form>
    {else}

    {/if}
</nav>
