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

<div class="comentarios-container" id="comentarios-container">
 <p>aca van los comentarios</p>
</div>

{include file="footer.tpl"}

<!-- agregar aca el div para mostar comentarios -->
