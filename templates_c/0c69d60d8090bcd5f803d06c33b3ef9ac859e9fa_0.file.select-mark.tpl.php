<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-24 21:22:25
  from 'C:\xampp\htdocs\WEB_2\TPE_WEB_2\templates\select-mark.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619e9f01508de8_30332903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c69d60d8090bcd5f803d06c33b3ef9ac859e9fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE_WEB_2\\templates\\select-mark.tpl',
      1 => 1637785103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619e9f01508de8_30332903 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Busca por marca, nombre o precio:</h1>
<form action="filterMark" method="post">
  <p>Seleciona una marca:
    <select name="select_brand">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marks']->value, 'mark');
$_smarty_tpl->tpl_vars['mark']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mark']->value) {
$_smarty_tpl->tpl_vars['mark']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['mark']->value->id_marca == $_smarty_tpl->tpl_vars['mark_id']->value) {?>
            <option selected="<?php echo $_smarty_tpl->tpl_vars['mark']->value->id_marca;?>
" value="<?php echo $_smarty_tpl->tpl_vars['mark']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['mark']->value->marca;?>
</option>
          <?php } else { ?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['mark']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['mark']->value->marca;?>
</option>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <button class="btn" type="submit">filtrar</button>
  </p>
</form><?php }
}
