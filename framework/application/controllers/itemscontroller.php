<?php

class ItemsController extends Controller {

	public $helpers = array('Html','Form');
	public $components = array('Auth');

	function start($id = null,$name = null) {
	
		$this->set('title','Strona główna');

	}
	function view($id = null,$name = null) {
	


	}
	function admin_index() {

		$this->Auth->needLogin();

		$this->set('title','Admin - Aktualności');
		
		//$this->set('todo',$this->Item->selectAll());
		$wynik = $this->Item->couchQuery('all2',array());
		$this->set('wynik',$wynik);
		
	}	
	function index() {
		/*	
		//WYMAGA LOGOWANIA
		 $authObject = new AuthComponent;
		$authObject->needLogin();
		*/
		$this->set('title','Aktualności');
		
		//$this->set('todo',$this->Item->selectAll());
		$wynik = $this->Item->couchQuery('all2',array());
		$this->set('wynik',$wynik);
		
	}
	
	function admin_add() {
		
		if(!empty($this->data)){

			$this->Item->couchSave($this->data,array("title","text")); //1-informacje z post, 2-jakie pola zapisac
			$this->redirect(array("controller"=>"items","view"=>"admin_index"));
		}
	}
	
	function admin_delete($id = null) {

	}

}
