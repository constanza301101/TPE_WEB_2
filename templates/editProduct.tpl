{include file="header.tpl"}
<!--HTML EDITAR PRODUCTO-->
<h1>editar producto</h1>
<form action="update/{$producto->id}" method="post" enctype="multipart/form-data">
    <input class="input" type="text" name="edit_product" placeholder="producto" value="{$producto->nombre}" required>
    <input class="input" type="number" name="edit_price" placeholder="precio" value="{$producto->precio}" required>
    <input class="input" type="number" name="edit_stock" placeholder="stock" value="{$producto->stock}" required>
    <input class="input" type="text" name="edit_description" placeholder="descripción" value="{$producto->descripcion}" required>

    <input class="input" type="file" name="edit_file" id="imageToUpload"  required>
    <input class="btn" type="file" name="edit_file" id="imageToUpload"  required><button class="btn">Eliminar imagen</button>

    <select name="select_brand">
        {foreach from=$marks item=mark}