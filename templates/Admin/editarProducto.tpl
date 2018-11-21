
{include file="header.tpl"}
{include file="./navAdmin.tpl"}
<h1>{$titulo}</h1>
<div class="container">
  <h2>Formulario</h2>
  <form method="post" action="editarProducto" enctype="multipart/form-data">
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
      <div class="form-group"> <label for="adjunto">Adjuntar imagen:</label>
        <input type="file" name="adjunto" class="form-control-file" id="adjunto" accept="image/x-png,image/jpeg" enctype="multipart/form-data">
        <br>
  <button type="submit" class="btn btn-primary">Editar Producto</button>
      </div>
    </div>

  </form>
</div>
{include file="footer.tpl"}
