<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-07 15:08:36
  from 'C:\xampp\htdocs\WEB_2\TPE\tpe_de_magui\templates\vue\average.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_615ef154511147_62137656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '022867689f5f1529126c87394a07d477d2360e6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE\\tpe_de_magui\\templates\\vue\\average.vue',
      1 => 1606954593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615ef154511147_62137656 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="vue-average" class="div_average">
        <p>Promedio de valoración</p>
        <div class="average">
            <div class="stars-inner">{{starsAverage()}}</div>
        </div>
    </div>
<?php }
}
