<?php
require_once dirname(__FILE__).'/../../config.php';

//pobranie parametrów
function getParametersLogin(&$data){
	$data['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
	$data['password'] = isset ($_REQUEST ['password']) ? $_REQUEST ['password'] : null;
}

//walidacja 
function validateLogin(&$data,&$msg){

	if ( ! (isset($data['login']) && isset($data['password']))) {
		return false;
	}
        
	if ( $data['login'] == "") {
		$msg [] = 'Nie podano loginu';
        }
        
	if ( $data['password'] == "") {
		$msg [] = 'Nie podano hasła';
	}

	if ($data['login'] == "Robert" && $data['password'] == "qwerty") {
		session_start();
		$_SESSION['user'] = 'Robert';
		return true;
	}
        
	if ($data['login'] == "Mateusz" && $data['password'] == "qazxsw") {
		session_start();
		$_SESSION['user'] = 'Mateusz';
		return true;
	}
	
	$msg [] = 'Niepoprawny login lub hasło';
	return false; 
}

//zmienne
$data = [];
$msg2 = [];


getParametersLogin($data);

if (!validateLogin($data,$msg)) {
	include _ROOT_PATH.'/app/security/login_view.php';
} else { 
	header("Location: "._APP_URL);
}