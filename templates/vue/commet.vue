{literal}
<div id="vue-comments" class="list-group">

    <ul id="comments-table">
        <li  class="list-group-item"  v-for="comment in comments" :data-id-comment="comment.id_comentario"> 
            {{comment.comentario}} - valoración: {{comment.valoracion}}
        </li>
    </ul>

</div>
{/literal} 