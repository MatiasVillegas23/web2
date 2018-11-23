{include file="header.tpl"}
{include file="fix.tpl"}
{include file="./navbar.tpl"}


<ul class="producto">

  <img src="../{$producto['imagen']}" alt="{$producto['nombre']}">
  <!-- {print_r($producto)} -->
  <nav class="col-md-6 col-lg-6">
    <a href="#" class="link"></a>
    <li class="list-group-item">
      <h3>{$producto['nombre']} - ${$producto['precio']} - {$marca['nombre']}<h3>
    </li>
    <li class="list-group-item">{$producto['descripcion']}</li>
  </nav>
</ul>

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

{include file="footer.tpl"}
