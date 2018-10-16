<?php
/* Smarty version 3.1.33, created on 2018-10-16 20:12:28
  from 'C:\tudai\xampp\htdocs\web2\templates\Store\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc62a0c6f8fc2_79751469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77bac24353ae67c42d03e31e78ba9a8779fb5400' => 
    array (
      0 => 'C:\\tudai\\xampp\\htdocs\\web2\\templates\\Store\\index.tpl',
      1 => 1539671473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:./navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc62a0c6f8fc2_79751469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Productos: </h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
<ul>
<img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
">
<nav class="col-md-6 col-lg-6">
  <li class="list-group-item"><h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
<h3></li>
  <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</li>
    </nav>
  </ul>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
