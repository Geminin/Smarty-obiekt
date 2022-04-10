
{extends file="main.tpl"}

{block name=logt} <li> <a href="{$conf->action_url}logout"  class="btn">wyloguj</a> </li>{/block}


{block name=tytul}   {/block}
{block name=under}   {/block}

{block name = whitey} 
Kiedyś zrobie inny kalkulator <br>
Także spokojnie<br>
Kolejny walutowy będzie jak będą SQL dodawany
{/block}

{block name=form} <form action="{$conf->action_root}calcCompute" class="pure-form pure-form-stacked" method="post"> {/block}

	
	
{block name=k1} 
    Liczba 1:<br>
    <input id="id_x" type="text" name="x" value="{$form->x}" />    
{/block}

{block name=k2}
    Operacja:<br>
    	<select name="op">
    		<option value="plus">+</option>
    		<option value="minus">-</option>
    		<option value="times">*</option>
    		<option value="div">/</option>
        	<option value="pow">^</option>
    	</select>    
{/block}

{block name=k3}
    Liczba 2:<br>
    <input id="id_x" type="text" name="y" value="{$form->y}" />
{/block}

{block name=k4}
    {include file='messages.tpl'}
	Wynik: {$res->result}
{/block}


{block name=Cform} 
<button type="submit" class="pure-button">Oblicz</button>

</form> 
{/block}
