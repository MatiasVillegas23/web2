{include file="header.tpl"}
{include file="./navAdmin.tpl"}
    <h1>{$titulo}</h1>
    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="editarMarca">
        <select name="id_marca" class="form-control filter">
          <option value="id_marca" selected disabled hidden>Filtrar por Marca</option>
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
        <button type="submit" class="btn btn-primary">Editar Marca</button>
      </form>
    </div>
{include file="footer.tpl"}
