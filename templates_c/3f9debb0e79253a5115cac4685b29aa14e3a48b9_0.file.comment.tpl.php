<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-07 15:08:36
  from 'C:\xampp\htdocs\WEB_2\TPE\tpe_de_magui\templates\comment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_615ef15468c867_97666690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f9debb0e79253a5115cac4685b29aa14e3a48b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE\\tpe_de_magui\\templates\\comment.tpl',
      1 => 1606954593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615ef15468c867_97666690 (Smarty_Internal_Template $_smarty_tpl) {
?><!--DATOS NO VISIBLES:-->
<form>
    <input type="hidden" id="input_IdProducto" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
    <input type="hidden" id="input_IdUsuario" value="<?php echo $_smarty_tpl->tpl_vars['Iduser']->value;?>
">
    <input type="hidden" id="input_Admin" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
">
</form>
<!--AGREGAR UN COMENTARIO-->
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
    <h1>Agregar un comentario: </h1>
    <form class="form_comentarios">
        <textarea class="textarea_commet" id="input_comentario" placeholder="Escriba su comentario" rows="10" cols="50" maxlength="200"></textarea>

        <div class="clasificacion">
            <p>Valora el producto</p>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stars']->value, 'star');
$_smarty_tpl->tpl_vars['star']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['star']->value) {
$_smarty_tpl->tpl_vars['star']->do_else = false;
?>
                <input class="input_star" id="radio<?php echo $_smarty_tpl->tpl_vars['star']->value;?>
" type="radio" name="estrellas" value="<?php echo $_smarty_tpl->tpl_vars['star']->value;?>
">
                <label class="label_star" for="radio<?php echo $_smarty_tpl->tpl_vars['star']->value;?>
">★</label>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <button id="btn_comment" class="btn" type="submit">Comentar</button>
    </form>
<?php }
}
}
