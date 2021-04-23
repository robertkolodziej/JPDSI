<?php
namespace app\controllers;
use PDOException;

class ListCtrl {
      private $records; 
    public function action_list(){
      
        	try {
           $database = new \Medoo\Medoo([
        'database_type' => 'mysql',
	'database_name' => 'kredyt',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
        'charset' => 'utf8',
	'collation' => 'utf8_polish_ci',
	'port' => 3306,
         'option' => [
             \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
             \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                   ]
                   ]); 
          
       } catch (\PDOException $ex) {
           getMessages() ->addError("DB Error: ".$ex->getMessage());
       }
       
       try{
			$this->records = $database->select("formularz", [
                                        "kwota",
					"okres",
					"oprocentowanie",
					"rezultat",
					"data",
				], $where );
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}	
        
                getSmarty()->assign('page_title','Kalkulatory');
                getSmarty()->assign('result2',$this->records);  
		getSmarty()->display('kredyt_view.tpl');
}

}