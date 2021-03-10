<?php 
require_once dirname(__FILE__).'/../config.php';

//include _ROOT_PATH.'/app/security/check.php';
require_once _ROOT_PATH.'/libs/Smarty.class.php';
//Parametry
function getParameters(&$data){
    $data['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $data['months'] = isset($_REQUEST['months']) ? $_REQUEST['months'] : null;
    $data['interest'] = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

//walidacja
function validate(&$data,&$msg){
    if ( ! (isset($data['amount']) && isset($data['months']) && isset($data['interest']))){
        return false; 
    }
    if($data['amount'] == ""){
        $msg[] = "Nie podano kwoty";
    }
     if($data['months'] == ""){
        $msg[] = "Nie podano ilości miesięcy";
    }
     if($data['interest'] == ""){
        $msg[] = "Nie podano oprocentowania";
    }
    if (count($msg) != 0) {
        return false;
    }
   
    if(! is_numeric($data['amount']) || ! is_numeric($data['months']) || ! is_numeric($data['interest'])){
        $msg[] = "W polach znajdują się dane niebędące liczbami";
    }
    	
    if (count($msg) != 0) {
        return false;
    } else {
        return true;
    }
}
    //wykonanie obliczeń
    function calculate(&$data,&$msg,&$result){
        $data['amount'] = floatval($data['amount']);
	$data['months'] = intval($data['months']);
	$data['interest'] = intval($data['interest']);
	
	
	$in = (($data['interest']/100)*$data['amount'])/$data['months'];
	$mo = $data['amount'] / $data['months'];
	$result = round($mo + $in,2);
       
}

//zmienne
$data = null;
$msg = [];
$result = null;



getParameters($data);
if (validate($data, $msg)){
    calculate($data, $msg, $result);
}
    
$smarty = new Smarty();
$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path)',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator');
$smarty->assign('data',$data);
$smarty->assign('result',$result);
$smarty->assign('msg',$msg);
     
$smarty->display(_ROOT_PATH.'/app/kredyt_view.tpl');
