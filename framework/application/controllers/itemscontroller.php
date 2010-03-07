<?php

class ItemsController extends AppController {

	public $helpers = array('Html','Form');
	public $components = array('Auth');
	public $uses = array('Item','Section');

	function start($id = null,$name = null) {
	
		$this->set('title','Strona główna');

	}
	function view($id = null) {
		if(isset($id)){
			$wynik = $this->Item->couchQuery('single',array('key'=>$id));
			$this->set('wynik',$wynik[0]);	
		}

	}

	function index() {
		/*	
		//WYMAGA LOGOWANIA
		 $authObject = new AuthComponent;
		$authObject->needLogin();
		*/
		$this->set('title','Aktualności');
		
		//$this->set('todo',$this->Item->selectAll());
		$wynik = $this->Item->couchQuery('all2',array("descending"=>"true"));
		$this->set('wynik',$wynik);
		
	}
	function admin_index() {

		$this->Auth->needLogin();

		$this->set('title','Admin - Aktualności');
		
		//$this->set('todo',$this->Item->selectAll());
		$wynik = $this->Item->couchQuery('all2',array("descending"=>"true"));
		$this->set('wynik',$wynik);
		
	}	
	function admin_add() {
		$this->Auth->needLogin();
		if(!empty($this->data)){
			
			$this->data['date'] = time(); 
			$this->Item->couchSave($this->data,array("title","text","date")); //1-informacje z post, 2-jakie pola zapisac
			$this->setMessage("Dodano aktualność");
			$this->redirect(array("controller"=>"items","view"=>"admin_index"));
		}
	}
	function admin_edit($id,$rev) {
		$this->Auth->needLogin();
		if(isset($id)){
			$wynik = $this->Item->couchQuery('single',array('key'=>$id));
			$this->set('wynik',$wynik[0]);	
		}	
	
		if(!empty($this->data)){			
			$this->data['date'] = time(); 
			$this->Item->couchSave($this->data,array("_id","title","text","date")); //1-informacje z post, 2-jakie pola zapisac
			$this->setMessage("Zmieniono aktualność");
			$this->redirect(array("controller"=>"items","view"=>"admin_index"));
		}
		
		
	}		
	function admin_delete($id,$rev) {
		$this->Auth->needLogin();
		if(!empty($id)){

			$this->Item->couchDelete($id,$rev); 
			$this->setMessage("Usunięto aktualność");
			$this->redirect(array("controller"=>"items","view"=>"admin_index"));
		}
	}	


}
