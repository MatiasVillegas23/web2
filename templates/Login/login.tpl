{include file="header.tpl"}
{include file="./loginNav.tpl"}
<div class="col-md-4 col-lg-4 form-inline">
    <h1>{$titulo}</h1>
    <form method="post" action="verificarLogin">
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="input" class="form-control" name="usuario" id="usuario" aria-describedby="usuario" placeholder="Usuario">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="pass">
      </div>
        {$Message}
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
{include file="footer.tpl"}
