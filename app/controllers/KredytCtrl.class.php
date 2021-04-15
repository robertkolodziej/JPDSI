<?php 

namespace app\controllers;

use app\forms\KredytData;
use app\transfer\KredytResult;


class KredytCtrl{
    
    private $data;
    private $result;
    private $in;
    private $mo;
    
    public function __construct() {
      
        $this->data = new kredytData();
        $this->result = new KredytResult();
    }
    



public function getParameters(){
    $this->data->amount = getFromRequest('amount');
    $this->data->months= getFromRequest('months');
    $this->data->interest = getFromRequest('interest');
}

//walidacja
public function validate(){
    if ( ! (isset($this->data->amount) && isset($this->data->months) && isset($this->data->interest))){
        return false; 
    }
    if($this->data->amount == ""){
        getMessages()->addError("Nie podano kwoty");
    }
     if($this->data->months == ""){
        getMessages()->addError("Nie podano ilości miesięcy");
    }
     if($this->data->interest == ""){
       getMessages()->addError("Nie podano oprocentowania");
    }
    if (! getMessages()->isError()) {
        
    if(! is_numeric($this->data->amount) || ! is_numeric($this->data->months) || ! is_numeric($this->data->interest)){
        getMessages()->addError("W polach znajdują się dane niebędące liczbami");
    }
    }	
    return ! getMessages()->isError();
    
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
    
    

getSmarty()->assign('user',unserialize($_SESSION['user']));
    getSmarty()->assign('page_title','Kalkulatory');
getSmarty()->assign('data',$this->data);
getSmarty()->assign('result',$this->result);

     
getSmarty()->display('kredyt_view.tpl');

}
}