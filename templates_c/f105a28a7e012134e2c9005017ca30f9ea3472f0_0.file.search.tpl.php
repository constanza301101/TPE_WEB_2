<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-07 15:07:18
  from 'C:\xampp\htdocs\WEB_2\TPE\tpe_de_magui\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_615ef106802e96_77483746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f105a28a7e012134e2c9005017ca30f9ea3472f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE\\tpe_de_magui\\templates\\search.tpl',
      1 => 1606954593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615ef106802e96_77483746 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="search" method="post">
    <p>Escribi un nombre y/o selecciona un precio:
        <input type="text" name="input_name" placeholder="Nombre del producto">
        <select name="select_price">
            <option> </option>
            <option>0-200</option>
            <option>201-400</option>
            <option>401-600</option>
        </select>
        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
    </P>
</form><?php }
}
