{extends file="main.tpl"}

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
    {* wyświeltenie listy błędów, jeśli istnieją *}
    {if $msgs->isError()}
    	<h4>Wystąpiły błędy: </h4>
    	<ol class="err">
    	{foreach $msgs->getErrors() as $err}
    	{strip}
    		<li>{$err}</li>
    	{/strip}
    	{/foreach}
    	</ol>
    {/if}

    {* wyświeltenie listy informacji, jeśli istnieją *}
    {if $msgs->isInfo()}
    	<h4>Informacje: </h4>
    	<ol class="inf">
    	{foreach $msgs->getInfos() as $inf}
    	{strip}
    		<li>{$inf}</li>
    	{/strip}
    	{/foreach}
    	</ol>
    {/if}

    {if isset($res->result)}
    	<h4>Wynik</h4>
    	<p class="res">
    	{$res->result}
    	</p>
    {/if}
{/block}


{block name=Cform} 
<button type="submit" class="pure-button">Oblicz</button>
</form> 
{/block}