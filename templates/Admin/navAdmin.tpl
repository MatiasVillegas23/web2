<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <ul class="nav navbar-nav">
    <li><a href="/web2/indexAdmin">Home</a></li>
    <li><a href="/web2/marcasAdmin">Marcas</a></li>
    <li><a href="formAltaProducto">Crear Producto</a></li>
    <li><a href="formEditarProducto">Editar Producto</a></li>
    <li><a href="formAltaMarca">Crear Marca</a></li>
    <li><a href="formEditarMarca">Editar Marca</a></li>
    <li><a href="logout">Cerra Sesion</a></li>
  </ul>
  <form class="col-md-4 col-sm-6"action="filtrarAdmin" method="POST">
    <select name="filtrarAdmin" class="form-control filter">
      <option value="" selected disabled hidden>Filtrar por marca</option>
      {foreach from=$marcas item=marca}
      <option value="{$marca['id_marca']}">{$marca['nombre']}</option>
      {/foreach}
    </select>
    <button class="btn btn-lg btn-primary btn-block dofilter" type="submit">Filtrar</button>
    </form>
</nav>
