<?php

class UsersController extends AppController {

	public $helpers = array('Html','Form');
	public $components = array('Auth');
	public $uses = array('User','Section');
	
	function view($id = null,$name = null) {
	
		$this->set('title',$name.' - My Todo List App');
		$this->set('todo',$this->User->select($id));

	}
	
	function login($param = null) {

		$this->set('title','Logowanie');
		
		//$this->set('datalogin',$this->data);
		
		
		//wyslano $_POST
		if(isset($this->data['login'])){
			$wynik = $this->User->couchQuery('login',array('key'=>array($this->data['login'],$this->data['password'])));
			
		//	$this->set('wynik',$wynik);
			if(isset($wynik[0])){

				$sessionData['login'] = $wynik[0]['values']['login'];
				$sessionData['cos'] = "coscos";
				
				$this->Auth->login($sessionData);
				$this->setMessage("Zalogowano");
				$this->redirect(array("controller"=>"items","view"=>"index"));							
			}
		}
		/*

		*/
		//$this->set('todo',$this->Item->selectAll());
	//	$wynik = $this->User->couchQuery('login',array('key'));
	//	$this->set('wynik',$wynik);
		
	}
	function logout() {

		$this->Auth->logout();
		$this->setMessage("Wylogowano");
		$this->redirect(array("controller"=>"items","view"=>"index"));
		
	}	

}
