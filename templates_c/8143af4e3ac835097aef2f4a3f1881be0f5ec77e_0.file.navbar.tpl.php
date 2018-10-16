<?php
/* Smarty version 3.1.33, created on 2018-10-16 20:12:28
  from 'C:\tudai\xampp\htdocs\web2\templates\Store\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc62a0c72c972_20319577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8143af4e3ac835097aef2f4a3f1881be0f5ec77e' => 
    array (
      0 => 'C:\\tudai\\xampp\\htdocs\\web2\\templates\\Store\\navbar.tpl',
      1 => 1539671323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc62a0c72c972_20319577 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <ul class="nav navbar-nav">
    <li><a href="index">PAGINA PRINCIPAL</a></li>
    <li><a href="mostrarMarcas">MARCAS</a></li>
    <li><a href="login">ADMINISTRACION</a></li>
  </ul>
  <form class="col-md-2 col-lg-2 form-inline"action="filtrar" method="POST">
    <select name="filtrar" class="form-control filter">
      <option value="" selected disabled hidden>ELEGI LA MARCA</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <button class="btn btn-primary btn-sm" type="submit">FILTRAR</button>
    </form>
</nav>
<?php }
}
