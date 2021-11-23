{include file="header.tpl"}
<!--SELECTOR DE MARCA PARA FILTRAR-->
<h3>{$usuario}</h3>
{include file="select-mark.tpl"}
<!--BUSCADOR-->
{include file="search.tpl"}
<!--TABLA CON TODOS LOS PRODUCTOS-->
<section class="contenedor_table">
    <table class="table">
        <caption class="titulo_table">{$titulo}</caption>
        <thead>
            <tr>
                <th class="excepcion"></th>
                <th>producto</th>
                <th>precio</th>
                <th>stock</th>
                <th>descripción</th>
                <th>marca</th>
            </tr>
        </thead>
        <tbody id="tabla">
            {foreach from=$productos item=producto}
                <tr>
                    <td class="td_imag excepcion"><img class="img" src="{$producto->imagen}"></td
                    <td>{$producto->nombre}</td>
                    <td>{$producto->precio}</td>
                    <td>{$producto->stock}</td>
                    <td>{$producto->descripcion}</td>
                  <!--{foreach from=$marks item=mark}
                        {if $mark->id_marca == $producto->id_marca}
                            <td>{$mark->marca}</td>
                        {/if}
                        {/foreach}-->
                    <td>{$producto->marca}</td>
                    <td class="excepcion"><button type="button"><a href="itemDetail/{$producto->id}">ver más</a></button></td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</section> 
<nav >
<ul class="navCompaginacion">
    {foreach from=$paginacion item=indice}
        <li class="liCompagnacion">
             {if $indice == $pagina}
                <a class="linkCompaginacion marcado" href="home/{$indice}">{$indice}</a>
            {else}
                <a class="linkCompaginacion" href="home/{$indice}">{$indice}</a>
            {/if}
        </li>
    {/foreach}    
</ul>
</nav>
{include file="footer.tpl"}