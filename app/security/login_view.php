<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
 <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css">
</head>
<body>

    <div style="margin: 0; position: absolute;top: 50%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%) ">

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
	<legend>Logowanie</legend>
	<fieldset>
		<label for="id_login">login: </label>
		<input id="id_login" type="text" name="login" value="<?php out($data['login']); ?>" />
		<label for="id_pass">hasło: </label>
		<input id="id_pass" type="password" name="password" />
	</fieldset>
	<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
</form>	
        
<?php

if (isset($msg)) {
	if (count ( $msg ) > 0) {
	echo '<ol style="margin: 0; position: absolute;top: 150%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%); border-style:ridge; border-radius: 15px;width: 300px; ;text-align: center; background-color:rgb(240,240,220);  ">';
	foreach ( $msg as $key => $msg ) {
		echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}	
?>        
</body>
</html>