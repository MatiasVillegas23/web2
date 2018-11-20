{include file="../header.tpl"}
{include file="./navAdminDetail.tpl"}
{include file="fix.tpl"}
{foreach from=$productos item=producto}

  <div class="col-lg-10 col-lg-offset-1">

    <div class="row">
      <div class="col-lg-8">
        <li class="list-group-item">{$producto['nombre']} - ${$producto['precio']}</li>
        <li class="list-group-item">{$producto['descripcion']}</li>
        <a href="../borrarProducto/{$producto['id_producto']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar Producto</a>
        &nbsp;
        <a href="../borrarImagen/{$producto['imagen']}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Eliminar Imagen</a>
        &nbsp;
        <a href="../indexAdmin"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>Volver</a>
      </div>
      <div class="col-lg-4"><img src="{$producto['imagen']}"/></div>
    </div>


    <div class="row">
      <br>
      <div class="col-lg-offset-8 col-lg-4"> <label for="adjunto">Adjuntar imagen:</label>
        <input type="file" name="imagen" class="form-control-file" id="imagen" accept="image/x-png,image/jpeg">
        <br>
        <button type="submit" class="btn btn-primary">SUBIR</button></div>
    </div>

  </div>

{/foreach}
{include file="footer.tpl"}

<!-- agregar aca el div para mostrar los comentarios -->
