<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-24 21:22:25
  from 'C:\xampp\htdocs\WEB_2\TPE_WEB_2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619e9f014772c9_72341487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '856bec9ea270f85f264a5d19534c4862b29075c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE_WEB_2\\templates\\header.tpl',
      1 => 1637700644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619e9f014772c9_72341487 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL;?>
">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/carrito_de_compras.css">
    <link rel="stylesheet" href="css/login.css">
    <?php echo '<script'; ?>
 src="js/btn_alert.js" defer><?php echo '</script'; ?>
>
    <link rel="shortcut icon" href="images/zafiro.png" type="image/x-icon">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/dae53e07cf.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
 <!-- development version, includes helpful console warnings -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
</head>
<body>
    <!--ENCABEZADO-->
    <header class="encabezado">
        <a href="#" ><img class="logoencabezado" src="images/logo.png" alt="zafiro"></a>
    </header>
    <!--BARRA DE NAVEGACIÓN-->
    <nav class="botoneratexto">
        <ul class="menu">
             <li class="botones"><a class="link" href="home">Tabla Producto</a></li>
            <li class="botones"><a class="link" href="mark">Tabla Categorias</a></li>
            <li class="botones"><a class="link" href="login">Login</a></li>
        </ul>
    </nav>
     
    <!--BANNER-->
    <figure>
        <img class="banner" src="images/banner.jpg" alt="Banner">
    </figure>
    <!--CONTINUA LA TABLA--><?php }
}
