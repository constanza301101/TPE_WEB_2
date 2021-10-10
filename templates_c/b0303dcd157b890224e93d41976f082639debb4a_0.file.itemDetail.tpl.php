<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-07 15:08:36
  from 'C:\xampp\htdocs\WEB_2\TPE\tpe_de_magui\templates\itemDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_615ef15448da62_03300810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0303dcd157b890224e93d41976f082639debb4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE\\tpe_de_magui\\templates\\itemDetail.tpl',
      1 => 1606954593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vue/average.vue' => 1,
    'file:comment.tpl' => 1,
    'file:vue/comments.vue' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_615ef15448da62_03300810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--TABLA CON TODOS LOS PRODUCTOS-->
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
    <div class="contenedor_logout_user">
        <h3><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h3>
        <!--BOTON QUE CIERRA LA SESIÓN-->
        <div>
            <p class="cerar_sesion_user">cerrar sesión</p>
            <button class="btn_logout_user" type="button"><a href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></button>
        </div>
    </div>
<?php }?>
<section class="contenedor_table">
    <table class="table">
        <caption class="titulo_table">detalle de producto</caption>
        <thead>
            <tr>
                <th>producto</th>
                <th>precio</th>
                <th>stock</th>
                <th>descripción</th>
                <th>marca</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->stock;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->descripcion;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['mark']->value->marca;?>
</td>
                </tr>
                <tr>
                    <td class="td_imag" colspan="5">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                            <img class="img" src="<?php echo $_smarty_tpl->tpl_vars['image']->value->imagen;?>
">
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </td>
                </tr>
        </tbody>
    </table>
    <!--PROMEDIO DE VALORACIÓN-->
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:vue/average.vue", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!--TABLA DE LA MARCA DEL PRODUCTO-->
     <table class="table">
        <caption class="titulo_table">marca <?php echo $_smarty_tpl->tpl_vars['mark']->value->marca;?>
</caption>
        <thead>
            <tr>
                <th>marca</th>
                <th>categoria</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['mark']->value->marca;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['mark']->value->categoria;?>
</td>
                </tr>
        </tbody>
    </table>
</section>
<!--FORMULARIO PARA AGREGAR UN COMENTARIO-->
<?php $_smarty_tpl->_subTemplateRender("file:comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--COMENTARIOS-->
<div>
    <?php $_smarty_tpl->_subTemplateRender("file:vue/comments.vue", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php echo '<script'; ?>
 src="js/app_comments.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
