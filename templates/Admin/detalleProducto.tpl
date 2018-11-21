{include file="../header.tpl"}
{include file="./navAdminDetail.tpl"}
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

    </div>


{/foreach}
  <div class="col-lg-8" id="comentarios-container">

  </div>
{include file="footer.tpl"}

<!-- agregar aca el div para mostrar los comentarios -->
