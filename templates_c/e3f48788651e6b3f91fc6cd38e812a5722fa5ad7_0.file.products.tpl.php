<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-11 01:40:14
  from 'C:\xampp\htdocs\WEB_2\TPE_WEB_2\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_616379deaec4c1_41760067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f48788651e6b3f91fc6cd38e812a5722fa5ad7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE_WEB_2\\templates\\products.tpl',
      1 => 1633908897,
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
function content_616379deaec4c1_41760067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--SELECTOR DE MARCA PARA FILTRAR-->
<?php $_smarty_tpl->_subTemplateRender("file:select-mark.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="contenedor_table">
    <table class="table">
        <caption class="titulo_table"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</caption>
        <thead>
            <tr>
                <th>producto</th>
                <th>precio</th>
                <th>stock</th>
                <th>descripción</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</td>
                    <td class="excepcion"><button type="button"><a href="itemDetail/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">ver más</a></button></td>
                </tr> 
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</section>     
</section> 

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
