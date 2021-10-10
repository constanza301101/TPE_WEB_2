<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-07 15:14:36
  from 'C:\xampp\htdocs\WEB_2\TPE\tpe_de_magui\templates\marks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_615ef2bcdf1da3_92509213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a9627386a0cfa8c63d85ae0ef0519770dfaa33f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE\\tpe_de_magui\\templates\\marks.tpl',
      1 => 1606954593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_615ef2bcdf1da3_92509213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--TABLA CON TODOS LAS CATEGORIAS-->
<section class="contenedor_table">
    <table class="table">
        <caption class="titulo_table"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</caption>
        <thead>
            <tr>
                <th>marca</th>
                <th>categoria</th>
            </tr>
        </thead>
        <tbody id="tabla">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marks']->value, 'mark');
$_smarty_tpl->tpl_vars['mark']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mark']->value) {
$_smarty_tpl->tpl_vars['mark']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['mark']->value->marca;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['mark']->value->categoria;?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
