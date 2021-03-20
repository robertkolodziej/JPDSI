<?php
require_once dirname (__FILE__).'/../config.php';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
		include_once $conf->root_path.'/app/calc_credit/KredytCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new KredytCtrl();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		// załaduj definicję kontrolera
		include_once $conf->root_path.'/app/calc_credit/KredytCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new KredytCtrl ();
		$ctrl->process ();
	break;
}