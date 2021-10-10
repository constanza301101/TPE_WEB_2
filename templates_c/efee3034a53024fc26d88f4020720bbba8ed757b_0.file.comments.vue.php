<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-07 15:08:36
  from 'C:\xampp\htdocs\WEB_2\TPE\tpe_de_magui\templates\vue\comments.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_615ef15471a677_45768027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efee3034a53024fc26d88f4020720bbba8ed757b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB_2\\TPE\\tpe_de_magui\\templates\\vue\\comments.vue',
      1 => 1606954593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615ef15471a677_45768027 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <h4>Comentarios</h4>
    <div id="vue-comments">
        <ul id="comments-table" class="list-group">
            <li class="list-group-item" v-for="(comment, key) in comments" :data-id-comment="comment.id_comentario">  
                <p class="text_comment">{{comment.comentario}}</p>
                <div class="valoracion">
                    <samp class="stars" v-for="star in stars(comment.valoracion)">★</samp>
                </div>

            <?php if ($_smarty_tpl->tpl_vars['admin']->value == 1) {?>
                <button class="btn_delet_comment" @click="deleteComment(comment.id_comentario, comments, key)"><i class="fas fa-trash"></i></button>
            <?php }?>
            </li>
        </ul>
    </div><?php }
}
