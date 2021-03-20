<?php

require_once dirname(__FILE__).'/../config.php';

require_once $conf->root_path.'/app/KredytCtrl.class.php';

$ctrl = new KredytCtrl();
$ctrl->process();