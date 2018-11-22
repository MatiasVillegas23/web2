{include file="header.tpl"}
{include file="./navAdmin.tpl"}

<div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h1>CREAR PRODUCTO:</h1>
          <form method="post" action="crearProducto"  enctype="multipart/form-data">
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
              <input type="file" name="adjunto" class="form-control-file" id="adjunto" accept="image/x-png,image/jpeg">
              <br>
            <button type="submit" class="btn btn-primary">Crear Producto</button>
            </div>
          </form>
        </div>

        
        <div class="col-lg-6">EDITAR ITEM</div>
        <div class="col-lg-6">CREAR MARCA</div>
        <div class="col-lg-6">EDITAR ITEM</div>
    </div>
</div>



{include file="footer.tpl"}
