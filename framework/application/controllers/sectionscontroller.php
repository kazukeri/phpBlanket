<?php

class SectionsController extends AppController {

	public $helpers = array('Html','Form');
	public $components = array('Auth');
	public $uses = array('Section');
	
	function view($id = null) {
		if(isset($id)){
			$wynik = $this->Section->couchQuery('single',array('key'=>$id));
			$this->set('wynik',$wynik[0]);	
		}

	}
	
	function admin_index() {

		$this->Auth->needLogin();

		$this->set('title','Admin - Działy');
		
		$wynik = $this->Section->couchQuery('all2',array("descending"=>"true"));
		$this->set('wynik',$wynik);
		
	}	
	function admin_add() {
		$this->Auth->needLogin();
		if(!empty($this->data)){
			$this->data['date'] = time(); 
			$this->Section->couchSave($this->data,array("title","text","date")); //1-informacje z post, 2-jakie pola zapisac
			$this->setMessage("Dodano dział");
			$this->redirect(array("controller"=>"sections","view"=>"admin_index"));
		}
	}
	function admin_edit($id,$rev) {
		$this->Auth->needLogin();
		if(isset($id)){
			$wynik = $this->Section->couchQuery('single',array('key'=>$id));
			$this->set('wynik',$wynik[0]);	
		}	
	
		if(!empty($this->data)){			
			$this->data['date'] = time(); 
			$this->Section->couchSave($this->data,array("_id","title","text","date")); //1-informacje z post, 2-jakie pola zapisac
			$this->setMessage("Zmieniono dział");
			$this->redirect(array("controller"=>"sections","view"=>"admin_index"));
		}
		
		
	}		
	function admin_delete($id,$rev) {
		$this->Auth->needLogin();
		if(!empty($id)){

			$this->Section->couchDelete($id,$rev); 
			$this->setMessage("Usunięto dział");
			$this->redirect(array("controller"=>"sections","view"=>"admin_index"));
		}
	}	


}
