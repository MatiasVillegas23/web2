{include file="header.tpl"}
{include file="./loginNav.tpl"}

<div class="col-md-5 col-lg-5 form-inline">
    <h1>{$titulo}</h1>
    <form method="post" action="verificarLogin">
      <div class="form-group">
        <label for="InputUser">Usuario</label>
        <input type="input" class="form-control" name="usuario" id="usuario" aria-describedby="usuario" placeholder="Usuario">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="pass">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>


    </form>
  </div>

<div class="col-md-5 col-lg-5 form-inline">
    <h1>{$titulo2}</h1>
    <form method="post" action="InsertUsuario">
      <div class="form-group">
        <label for="InputUser">Usuario</label>
        <input type="input" class="form-control" name="usuario" id="usuario" aria-describedby="usuario" placeholder="Usuario">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="pass">
      </div>

      <button type="submit" class="btn btn-success">Registrarse</button>


    </form>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-8"><h1>{$Message}</h1></div>
    </div>
</div>
{include file="footer.tpl"}
