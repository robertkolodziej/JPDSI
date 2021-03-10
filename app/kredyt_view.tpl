{extends file="../templates/main.tpl"}

{block name=footer}<id="footer"> Kalkulator kredytowy stworzony przez Roberta Kołodziej w ramach laboratorium JPDSI</div>{/block}
{block name="content"}
  
    	

            <form <form action="{$app_url}/app/kredyt.php" method="post" >
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
<!--
<?php

if (isset($msg)) {
	if (count ( $msg ) > 0) {
		echo '<ol style="margin: 0; position: absolute;top: 80%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%); border-style:ridge; border-radius: 15px;width: 300px; background-color: red; width:300px;text-align: center;color:white;">';
		foreach ( $msg as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>-->

{if isset($msg)}
{if count($msg) > 0 }
<h4>Wystąpiły następujące błedy:</h4>
<ol>
    {foreach  from=$msg item=m}
    {strip}
    <li>{$m}</li>
    {/strip}
    {/foreach}
</ol>
{/if}
{/if}

<!--<?php if (isset($result)){ ?>
<div style="margin: 0; position: absolute;top: 80%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%); border-style:ridge; border-radius: 15px;width: 300px; ;text-align: center; background-color:rgb(240,240,240);  ">
<?php echo 'Rata będzie wynosić: '.round($result, 2); ?>
</div>
<?php } ?>-->
{if isset($result)}
	<h4>Twoja rata będzie wynosić:</h4>
	<p>
	{$result}
	</p>
{/if}
{/block}