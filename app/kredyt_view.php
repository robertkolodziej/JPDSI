<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>
  <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css">
    	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>  
        <div style="margin: 0; position: absolute;top: 50%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%) ">

            <form <form action="<?php print(_APP_ROOT); ?>/app/kredyt.php" method="post" class="pure-form pure-form-stacked">
    <fieldset>
        <legend>Kalkulator kredytowy</legend>
        <label for="id_x">Kwota: </label>
	<input id="id_x" type="text" name="amount" value="<?php if (isset($amount)) print($amount); ?>" /><br />
	<label for="id_y">Liczba miesięcy: </label>
	<input id="id_y" type="text" name="months" value="<?php if (isset($months)) print($months); ?>" /><br />
	<label for="id_z">Oprocentowanie: </label>
	<input id="id_z" type="text" name="interest" value="<?php if (isset($interest)) print($interest); ?>" /><br />
    </fieldset>
    <input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>
        </div>

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
?>

<?php if (isset($result)){ ?>
<div style="margin: 0; position: absolute;top: 80%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%); border-style:ridge; border-radius: 15px;width: 300px; ;text-align: center; background-color:rgb(240,240,240);  ">
<?php echo 'Rata będzie wynosić: '.round($result, 2); ?>
</div>
<?php } ?>

</body>
</html>