<?php
require_once 'init.php';

//switch ($action) {
//	default : // 'calcView'
//	    // załaduj definicję kontrolera
//		include_once $conf->root_path.'/app/controllers/KredytCtrl.class.php';
//		// utwórz obiekt i uzyj
//		$ctrl = new app\controllers\KredytCtrl();
//		$ctrl->generateView ();
//	break;
//	case 'calcCompute' :
//		
//		// utwórz obiekt i uzyj
//		$ctrl = new app\controllers\KredytCtrl();
//		$ctrl->process ();
//	break;
//}

//getConf()->login_action = 'login'; //określenie akcji logowania - robimy to w tym miejscu, ponieważ tu są zdefiniowane wszystkie akcje

//switch ($action) {
//	default :
//		control('app\\controllers', 'KredytCtrl','generateView', ['user','admin']);
//	case 'login': 
//		control('app\\controllers', 'LoginCtrl','doLogin');
//	case 'calcCompute' : 
//		//zamiast pierwszego parametru można podać null lub '' wtedy zostanie przyjęta domyślna przestrzeń nazw dla kontrolerów
//		control(null, 'KredytCtrl','process',['user','admin']);
//	case 'logout' : 
//		control(null, 'LoginCtrl','doLogout',['user','admin']);
//}
getRouter()->setDefaultRoute('calcCompute'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

//getRouter()->addRoute('generateView',    'KredytCtrl',  ['user','admin']);
getRouter()->addRoute('calcCompute', 'KredytCtrl',  ['user','admin']);
getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);

getRouter()->go(); 