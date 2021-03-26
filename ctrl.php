<?php
require_once 'init.php';

switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
		include_once $conf->root_path.'/app/controllers/KredytCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new KredytCtrl();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		// załaduj definicję kontrolera
		include_once $conf->root_path.'/app/controllers/KredytCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new KredytCtrl ();
		$ctrl->process ();
	break;
}