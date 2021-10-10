<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-07 15:07:17
  from 'C:\xampp\htdocs\WEB_2\TPE\tpe_de_magui\templates\select-mark.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_615ef105e8f400_07133781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e02ea94dcdc590016b1d9ddb8e616f1e62ff098' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE\\tpe_de_magui\\templates\\select-mark.tpl',
      1 => 1606954593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615ef105e8f400_07133781 (Smarty_Internal_Template $_smarty_tpl) {
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
