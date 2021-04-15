{extends file="templates/main.tpl"}


{block name=stopka}<p class="copyright"> Kalkulator kredytowy stworzony przez Roberta Kołodziej w ramach laboratorium JPDSI</p>{/block}
{block name="content"}
  
    	<div>
	<a href="{$conf->action_url}logout"  >wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

            <form <form action="{$conf->action_root}calcCompute" method="post" >
    <fieldset>
        <label for="id_x">Kwota: </label>
	<input id="id_x" type="text" name="amount" value="" /><br />
	<label for="id_y">Liczba miesięcy: </label>
	<input id="id_y" type="text" name="months" value="" /><br />
	<label for="id_z">Oprocentowanie: </label>
	<input id="id_z" type="text" name="interest" value="" /><br />
    </fieldset>
    <input type="submit" value="Oblicz"  />
</form>
        </div>


{if $msgs->isError()}

<h4>Wystąpiły następujące błedy:</h4>
<ol>
    {foreach  from=$msgs->getErrors() item=m}
    {strip}
    <li>{$m}</li>
    {/strip}
    {/foreach}
</ol>

{/if}


{if isset($result->result)}
	<h4>Twoja rata będzie wynosić:</h4>
	<p>
	{$result ->result}
	</p>
{/if}
{/block}