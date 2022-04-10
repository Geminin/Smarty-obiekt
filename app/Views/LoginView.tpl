
{extends file="main.tpl"}

{block name=tytul}   {/block}
{block name=under}   {/block}

{block name = whitey} 

{/block}

{block name=form} <form action="{$conf->action_url}login" class="pure-form pure-form-stacked" method="post"> {/block}

	
	
{block name=k1} 

    <label for="id_login">login: </label>
    <input id="id_login" type="text" name="login"/>

{/block}


{block name=k2}

    <label for="id_pass">pass: </label>
    <input id="id_pass" type="password" name="pass" /><br />

{/block}


{block name=k3}

    <input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>

{/block}

{block name=k4}

    {include file='messages.tpl'}

{/block}


{block name=Cform} 

</form> 

{/block}
