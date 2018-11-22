{include file="header.tpl"}
{include file="./navAdmin.tpl"}

<div class="container">
  <div class="row">
    <div class="col-lg-offset-3 col-lg-6">
    <h1 class="text-center">ADMINISTRAR PRODUCTOS:</h1>
  </div>
    </div>

    <div class="row">
        <div class="col-lg-5 bg-info">
          <h3>CREAR PRODUCTO:</h3>
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
                <option value="marca" selected disabled hidden>ELEGIR MARCA</option>
                {foreach from=$marcas item=marca}
                <option value="{$marca['id_marca']}" name="marca" id= "marca" for="marca">{$marca['nombre']}</option>
                {/foreach}
              </select>
            </div>
            <div class="form-group"> <label for="adjunto">Adjuntar imagen:</label>
              <input type="file" name="adjunto" class="form-control-file" id="adjunto" accept="image/x-png,image/jpeg">
            <button type="submit" class="btn btn-primary">Crear Producto</button>
            </div>
          </form>
        </div>


        <div class="col-lg-offset-2 col-lg-5 bg-info">
          <h3>EDITAR PRODUCTO:</h3>
          <form method="post" action="editarProducto" enctype="multipart/form-data">
            <select name="id_producto" class="form-control filter">
              <option value="id_producto" selected disabled hidden>ELEGIR PRODUCTO</option>
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
                <option value="marca" selected disabled hidden>ELEGIR MARCA</option>
                {foreach from=$marcas item=marca}
                <option value="{$marca['id_marca']}" name="marca" id= "marca" for="marca">{$marca['nombre']}</option>
                {/foreach}
              </select>
            </div>
              <div class="form-group"> <label for="adjunto">Adjuntar imagen:</label>
                <input type="file" name="adjunto" class="form-control-file" id="adjunto" accept="image/x-png,image/jpeg" enctype="multipart/form-data">
              <button type="submit" class="btn btn-primary">Editar Producto</button>
              </div>
            </div>

          </form>
        </div>

        <div class="row">
          <div class="col-lg-offset-3 col-lg-6">
          <h1 class="text-center">ADMINISTRAR MARCAS:</h1>
        </div>
          </div>

<div class="row">
        <div class="col-lg-5 bg-warning">
          <h1>CREAR MARCA:</h1>
          <form method="post" action="crearMarca" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nombreMarca">Nombre</label>
              <input type="text" class="form-control" id="nombreMarca" name="nombreMarca">
            </div>
            <div class="form-group">
              <label for="descripcionMarca">Descripcion</label>
              <input type="text" class="form-control" id="descripcionMarca" name="descripcionMarca">
            </div>
            <div class="form-group"> <label for="adjunto">Adjuntar imagen:</label>
              <input type="file" name="adjunto" class="form-control-file" id="adjunto" accept="image/x-png,image/jpeg">
            <button type="submit" class="btn btn-primary">Crear Marca</button>
          </form>
        </div>
</div>

        <div class="col-lg-offset-2 col-lg-5 bg-warning">
          <h1>EDITAR MARCA:</h1>
          <form method="post" action="editarMarca" enctype="multipart/form-data">
            <select name="id_marca" class="form-control filter">
              <option value="id_marca" selected disabled hidden>ELEGIR MARCA</option>
              {foreach from=$marcas item=marca}
              <option value="{$marca['id_marca']}" name="marca" id= "id_marca" for="id_marca">{$marca['nombre']}</option>
              {/foreach}
            </select>
            <div class="form-group">
              <label for="nombreMarca">Nuevo Nombre Marca </label>
              <input type="text" class="form-control" id="nombreMarca" name="nombreMarca">
            </div>
            <div class="form-group">
              <label for="descripcionMarca">Descripcion</label>
              <input type="text" class="form-control" id="descripcionMarca" name="descripcionMarca">
            </div>
            <div class="form-group"> <label for="adjunto">Adjuntar imagen:</label>
              <input type="file" name="adjunto" class="form-control-file" id="adjunto" accept="image/x-png,image/jpeg">
            <button type="submit" class="btn btn-primary">Editar Marca</button>
          </form>
        </div>
    </div>

</div>



<!-- ADMINISTRAR USUARIOS -->
<div class="row">
  <div class="col-lg-offset-3 col-lg-6">
    <h1 class="text-center">ADMINISTRAR USUARIOS:</h1>
  </div>
</div>
<div class="row">
  <div class="col-lg-offset-3 col-lg-6">
    <form class="form-horizontal">
<fieldset>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserListButton">SELECCIONAR USUARIO:</label>
  <div class="col-md-6">
    <select id="UserList" name="UserList" class="form-control">
      {foreach from=$marcas item=marca}
      <option value="{$marca['id_marca']}"> {$marca['nombre']} - test</option>
      {/foreach}
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="perms">PERMISOS DE ADMIN:</label>
  <div class="col-md-8">
    <button id="addAdmin" name="addAdmin" class="btn btn-success">OTORGAR</button>
    <button id="delAdmin" name="delAdmin" class="btn btn-inverse">REMOVER</button>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="DeleteUser">ELIMINAR USUARIO:</label>
  <div class="col-md-4">
    <button id="delUser" name="delUser" class="btn btn-danger">ELIMINAR!!!</button>
  </div>
</div>

</fieldset>
</form>
   </div>
</div>



{include file="footer.tpl"}
