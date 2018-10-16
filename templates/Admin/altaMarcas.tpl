{include file="header.tpl"}
{include file="./navAdmin.tpl"}
    <h1>{$titulo}</h1>
    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="crearMarca">
        <div class="form-group">
          <label for="nombreMarca">Nombre</label>
          <input type="text" class="form-control" id="nombreMarca" name="nombreMarca">
        </div>
        <div class="form-group">
          <label for="descripcionMarca">Descripcion</label>
          <input type="text" class="form-control" id="descripcionMarca" name="descripcionMarca">
        </div>
        <button type="submit" class="btn btn-primary">Crear Marca</button>
      </form>
    </div>
{include file="footer.tpl"}
