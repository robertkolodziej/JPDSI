{extends file="../templates/main.tpl"}

{block name=stopka}<p class="copyright"> Kalkulator kredytowy stworzony przez Roberta Kołodziej w ramach laboratorium JPDSI</p>{/block}
{block name="content"}
  
    	

            <form <form action="{$conf->app_url}/app/kredyt.php" method="post" >
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