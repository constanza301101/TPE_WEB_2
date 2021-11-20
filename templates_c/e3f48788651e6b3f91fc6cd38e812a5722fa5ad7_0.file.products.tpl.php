<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-20 23:05:30
  from 'C:\xampp\htdocs\WEB_2\TPE_WEB_2\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6199712a7b1a78_84570531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f48788651e6b3f91fc6cd38e812a5722fa5ad7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE_WEB_2\\templates\\products.tpl',
      1 => 1637444253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:select-mark.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6199712a7b1a78_84570531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--SELECTOR DE MARCA PARA FILTRAR-->
<?php $_smarty_tpl->_subTemplateRender("file:select-mark.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--TABLA CON TODOS LOS PRODUCTOS-->
<section class="contenedor_table">
    <table class="table">
        <caption class="titulo_table"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</caption>
        <thead>
            <tr>
                <th class="excepcion"></th>
                <th>producto</th>
                <th>precio</th>
                <th>stock</th>
                <th>descripción</th>
                <th>marca</th>
            </tr>
        </thead>
        <tbody id="tabla">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                <tr>
                    <td class="td_imag excepcion"><img class="img" src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
"></td
                    <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marks']->value, 'mark');
$_smarty_tpl->tpl_vars['mark']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mark']->value) {
$_smarty_tpl->tpl_vars['mark']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['mark']->value->id_marca == $_smarty_tpl->tpl_vars['producto']->value->id_marca) {?>
                            <td><?php echo $_smarty_tpl->tpl_vars['mark']->value->marca;?>
</td>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <td class="excepcion"><button type="button"><a href="itemDetail/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">ver más</a></button></td>
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
