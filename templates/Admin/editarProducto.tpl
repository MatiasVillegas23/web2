{include file="header.tpl"}
{include file="./navAdmin.tpl"}
<h1>{$titulo}</h1>
<div class="container">
  <h2>Formulario</h2>
  <form method="post" action="editarProducto">
    <select name="id_producto" class="form-control filter">
      <option value="id_producto" selected disabled hidden>Filtrar por Producto</option>
      {foreach from=$productos item=producto}
      <option value="{$producto['id_producto']}" name="marca" id= "id_producto" for="id_producto">{$producto['nombre']}</option>
      {/foreach}
    </select>
    <div class="form-group">
      <label for="nombreProducto">Nombre</label>
      <input type="text" class="form-control" id="nombreProducto" name="nombreProducto">
    </div>
    <div class="form-group">
      <label for="descripcionProducto">Descripcion</label>
      <input type="text" class="form-control" id="descripcionProducto" name="descripcionProducto">
    </div>
    <div class="form-group">
      <label for="precio">Precio</label>
      <input type="text" class="form-control" id="precio" name="precio">
    </div>
    <div class="form-group">
      <label for="marca">Marca</label>
      <select name="marca" class="form-control filter">
        <option value="marca" selected disabled hidden>Filtrar por marca</option>
        {foreach from=$marcas item=marca}
        <option value="{$marca['id_marca']}" name="marca" id= "marca" for="marca">{$marca['nombre']}</option>
        {/foreach}
      </select>
    </div>
    <div class="form-group">
      <label for="imagen">Imagen</label>
      <input type="text" class="form-control" id="imagen" name="imagen">
    </div>
    <button type="submit" class="btn btn-primary">Editar Producto</button>
  </form>
</div>
{include file="footer.tpl"}
