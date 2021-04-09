<?php
require_once 'init.php';

switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
		include_once $conf->root_path.'/app/controllers/KredytCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\KredytCtrl();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\KredytCtrl();
		$ctrl->process ();
	break;
}