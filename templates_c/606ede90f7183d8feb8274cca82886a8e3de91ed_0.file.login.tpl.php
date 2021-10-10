<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-07 15:07:34
  from 'C:\xampp\htdocs\WEB_2\TPE\tpe_de_magui\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_615ef116666985_01609623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '606ede90f7183d8feb8274cca82886a8e3de91ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE\\tpe_de_magui\\templates\\login.tpl',
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
function content_615ef116666985_01609623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div>
        <?php if (empty($_smarty_tpl->tpl_vars['message']->value)) {?>
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        <?php } else { ?>
            <h2 class="ContraseñaIncorrecta"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
        <?php }?>
    </div>
    <div class="container">
    <h1>Login</h1>
        <form action="verify" method="post">
            <!-- Username -->
            <label class="label" for="name">Username:</label>
            <input class="input" type="name" name="input_username" placeholder="username" required>
            <!-- Password -->
            <label class="label" for="username">Password:</label>
            <input class="input" type="password" name="input_password" placeholder="password" required>
            <!--<p class="label"><a href="#">Forgot your password?</a></p> -->
            <p class="label"><a href="register">REGISTER</a></p>
            <!-- Submit Button -->
            <button class="btn" type="submit">Login</button>
        </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
