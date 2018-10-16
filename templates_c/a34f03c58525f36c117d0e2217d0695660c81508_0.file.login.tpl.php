<?php
/* Smarty version 3.1.33, created on 2018-10-16 20:12:29
  from 'C:\tudai\xampp\htdocs\web2\templates\Login\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc62a0db1bbd8_49667705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a34f03c58525f36c117d0e2217d0695660c81508' => 
    array (
      0 => 'C:\\tudai\\xampp\\htdocs\\web2\\templates\\Login\\login.tpl',
      1 => 1539673348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:./loginNav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc62a0db1bbd8_49667705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./loginNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-md-4 col-lg-4 form-inline">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <form method="post" action="verificarLogin">
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="input" class="form-control" name="usuario" id="usuario" aria-describedby="usuario" placeholder="Usuario">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="Contraseña">
      </div>
        <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
