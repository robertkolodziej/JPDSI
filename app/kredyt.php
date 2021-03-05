<?php 
require_once dirname(__FILE__).'/../config.php';


//Parametry
function getParameters(&$amount,&$months,&$interest){
    $amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $months = isset($_REQUEST['months']) ? $_REQUEST['months'] : null;
    $interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

//walidacja
function validate(&$amount,&$months,&$interest,&$msg){
    if ( ! (isset($amount) && isset($interest) && isset($months))){
        return false; 
    }
    if($amount == ""){
        $msg[] = "Nie podano kwoty";
    }
     if($months == ""){
        $msg[] = "Nie podano ilości miesięcy";
    }
     if($interest == ""){
        $msg[] = "Nie podano oprocentowania";
    }
    if (count($msg) != 0) {
        return false;
    }
   
    if(! is_numeric( $amount) || ! is_numeric( $months ) || ! is_numeric( $interest )){
        $msg[] = "W polach znajdują się dane niebędące liczbami";
    }
    	
    if (count($msg) != 0) {
        return false;
    } else {
        return true;
    }
}
    //wykonanie obliczeń
    function calculate(&$amount,&$months,&$interest,&$msg,&$result){
        $amount = floatval($amount);
	$months = intval($months);
	$interest = intval($interest);
	
	
	$in = (($interest/100)*$amount)/$months;
	$mo = $amount / $months;
	$result = $mo + $in;
}

//zmienne
$amount = null;
$months = null;
$interest = null;
$msg = [];
$result = null;

getParameters($amount, $months, $interest);
if (validate($amount, $months, $interest, $msg)){
    calculate($amount, $months, $interest, $msg, $result);
}
    
       include 'kredyt_view.php';
