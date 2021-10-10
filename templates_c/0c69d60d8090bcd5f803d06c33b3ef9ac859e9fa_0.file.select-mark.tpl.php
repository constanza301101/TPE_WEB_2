<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-11 01:40:14
  from 'C:\xampp\htdocs\WEB_2\TPE_WEB_2\templates\select-mark.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_616379deb945f9_01788425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c69d60d8090bcd5f803d06c33b3ef9ac859e9fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE_WEB_2\\templates\\select-mark.tpl',
      1 => 1633908938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616379deb945f9_01788425 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>filtrá los productos por marca</h1>
<form action="filterMark" method="post">
  <p>Seleciona una marca:
    <select name="select_brand">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marks']->value, 'mark');
$_smarty_tpl->tpl_vars['mark']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mark']->value) {
$_smarty_tpl->tpl_vars['mark']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['mark']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['mark']->value->marca;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <button class="btn" type="submit">filtrar</button>
    <button  type="button"><a href="home">ver todo</a></button>

  </p>
</form> <?php }
}
