<?php 


require_once $conf->root_path.'/libs/Smarty.class.php';
require_once $conf->root_path.'/Messages.class.php';
require_once $conf->root_path.'/app/calc_credit/KredytData.class.php';
require_once $conf->root_path.'/app/calc_credit/KredytResult.class.php';


class KredytCtrl{
    private $msgs;
    private $data;
    private $result;
    private $in;
    private $mo;
    
    public function __construct() {
        $this->msgs = new Messages();
        $this->data = new kredytData();
        $this->result = new KredytResult();
    }
    



public function getParameters(){
    $this->data->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $this->data->months= isset($_REQUEST['months']) ? $_REQUEST['months'] : null;
    $this->data->interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

//walidacja
public function validate(){
    if ( ! (isset($this->data->amount) && isset($this->data->months) && isset($this->data->interest))){
        return false; 
    }
    if($this->data->amount == ""){
        $this->msgs->addError("Nie podano kwoty");
    }
     if($this->data->months == ""){
        $this->msgs->addError("Nie podano ilości miesięcy");
    }
     if($this->data->interest == ""){
       $this->msgs->addError("Nie podano oprocentowania");
    }
    if (! $this->msgs->isError()) {
        
    if(! is_numeric($this->data->amount) || ! is_numeric($this->data->amount) || ! is_numeric($this->data->amount)){
        $this->msgs->addError("W polach znajdują się dane niebędące liczbami");
    }
    }	
    return ! $this->msgs->isError();
    
}
    //wykonanie obliczeń
    public function process(){
        $this->getparameters();
        if($this->validate()){
        $this->data->amount = floatval($this->data->amount);
	$this->data->months = intval($this->data->months);
	$this->data->interest = intval($this->data->interest);
	
	
	$this->in = (($this->data->interest/100)*$this->data->amount)/$this->data->months;
	$this->mo = $this->data->amount / $this->data->months;
	$this->result->result = round($this->mo + $this->in,2);
        
       
}
 $this->generateView();  
    }

public function generateView(){
    global $conf;
    
$smarty = new Smarty();
$smarty->assign('conf',$conf);
$smarty->assign('page_title','Kalkulatory');
$smarty->assign('data',$this->data);
$smarty->assign('result',$this->result);
$smarty->assign('msgs',$this->msgs);
     
$smarty->display($conf->root_path.'/app/calc_credit/kredyt_view.tpl');

}
}