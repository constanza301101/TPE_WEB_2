<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-24 21:22:25
  from 'C:\xampp\htdocs\WEB_2\TPE_WEB_2\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619e9f012bdef1_39544556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f48788651e6b3f91fc6cd38e812a5722fa5ad7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE_WEB_2\\templates\\products.tpl',
      1 => 1637785075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:select-mark.tpl' => 1,
    'file:search.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619e9f012bdef1_39544556 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--SELECTOR DE MARCA PARA FILTRAR-->
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
    <div class="contenedor_logout_user">
        <h3><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h3>
        <!--BOTON DE CERRAR SESIÓN-->
        <div>
            <p class="cerar_sesion_user">cerrar sesión</p>
            <button class="btn_logout_user" type="button"><a href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></button>
        </div>
    </div>
<?php }
$_smarty_tpl->_subTemplateRender("file:select-mark.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--BUSCADOR-->
<?php $_smarty_tpl->_subTemplateRender("file:search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--TABLA CON TODOS LOS PRODUCTOS-->
<section class="contenedor_table">
    <table class="table">
        <caption class="titulo_table"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</caption>
        <thead>
            <tr>
                <th>producto</th>
                <th>precio</th>
                <th>stock</th>
                <th>descripción</th>
                <th>marca</th>
            </tr>
        </thead>
        <tbody id="tabla">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->stock;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->descripcion;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</td>
                    <td class="excepcion"><button class="verMas" type="button"><a href="itemDetail/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">ver más</a></button></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</section>
<nav >
<ul class="navCompaginacion">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value, 'index');
$_smarty_tpl->tpl_vars['index']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value) {
$_smarty_tpl->tpl_vars['index']->do_else = false;
?>
        <li class="liCompagnacion">
           <?php if ($_smarty_tpl->tpl_vars['index']->value == $_smarty_tpl->tpl_vars['page']->value) {?>
                <a class="linkCompaginacion marcado" href="home/<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</a>
            <?php } else { ?>
                <a class="linkCompaginacion" href="home/<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</a>
            <?php }?>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</nav>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
