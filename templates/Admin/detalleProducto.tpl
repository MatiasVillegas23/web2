{include file="../header.tpl"}
{include file="./navAdmin.tpl"}
{include file="fix.tpl"}
{foreach from=$productos item=producto}

  <div class="col-lg-10 col-lg-offset-1">

    <div class="row">
      <div class="col-lg-8">

        <a href="#" class="link"></a>
        <li class="list-group-item">{$producto['nombre']} - ${$producto['precio']}</li>
        <li class="list-group-item">{$producto['descripcion']}</li>
        <a href="../borrarProducto/{$producto['id_producto']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar Producto</a>
        &nbsp;
        <a href="../borrarImagen/{$producto['imagen']}/{$producto['id_producto']}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Eliminar Imagen</a>
        &nbsp;
        <a href="../indexAdmin"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>Volver</a>
      </div>

      <div class="col-lg-4"><img src="../{$producto['imagen']}"/></div>

      <div class="row">
        <br>
        <div class="col-lg-offset-8 col-lg-4"> <label for="adjunto">Cambiar imagen:</label>
          <form method="post" enctype="multipart/form-data">
          <input type="file" name="imagen" class="form-control-file" id="imagen" accept="image/x-png,image/jpeg">
        <br>
        <a href="../cambiarImagen/{$producto['imagen']}/{$producto['id_producto']}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Cambiar Imagen</a>
          <!-- <button type="submit" class="btn btn-primary">Aceptar</button></div>-->
        </div>
          </form>
      </div>
    </div>
  </div>

    <div class="col-lg-8" id="comentarios-container">
      <label><p>Cargando Comentarios.....</p></label>
    </div>
    <div class="col-lg-8">
      <form method="post" >
        <div class="form-group">
          <label for="exampleFormControlSelect1">Seleccione Puntaje</label>
          <select class="form-control" id="puntaje">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Comentario</label>
          <textarea class="form-control" id="comentario" rows="3"></textarea>
        </div>
        <button type="button" class="enviar" >Enviar</button>
      </form>
    </div>
{/foreach}
{include file="footer.tpl"}

<!-- agregar aca el div para mostrar los comentarios -->
