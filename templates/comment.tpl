<!--AGREGAR UN COMENTARIO-->
<h1>Agregar un comentario: </h1>
<form>
    <input type="hidden" id="input_IdProducto" value="{$producto->id}">
    <input type="hidden" id="input_IdUsuario" value="{$Iduser}">
    <textarea class="input" id="input_comentario" placeholder="Escriba su comentario..." rows="10" cols="50" required></textarea>
    <input class="input" type="number" id="input_valoracion" placeholder="valoración.." required>
    <button id="btn_comment" class="btn" type="submit">Comentar</button>
</form> 