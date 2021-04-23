<?php
require_once 'init.php';


getRouter()->setDefaultRoute('list'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)


getRouter()->addRoute('list',      'ListCtrl', ['user','admin']);
getRouter()->addRoute('calcCompute', 'KredytCtrl',  ['user','admin']);
getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);

getRouter()->go(); 