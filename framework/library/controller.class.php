<?php
class Controller {

	protected $_model;
	protected $_controller;
	protected $_action;
	protected $_template;
	public $data;
	protected $helpers;
	protected $components;
	protected $uses;
	
	function setMessage($string){
		$_SESSION["message_in_view"] = $string;
	}
	
	function __construct($model, $controller, $action) {

		$this->_controller = $controller;
		$this->_action = $action;
		$this->_model = $model;

	//	$this->$model = new $model;
		$this->_template = new Template($controller,$action,$this->helpers);

		foreach($_POST as $key => $somedata){
			$this->data[$key] = $somedata;
		
		}
		if(!empty($this->uses)){
			foreach($this->uses as $key => $use){
				$useClass = $use;
				$this->$use = new $useClass;
			
			}		
		}		
		if(!empty($this->components)){
			foreach($this->components as $key => $component){
				$componentClass = $component."Component";
				$this->$component = new $componentClass;
			
			}		
		}
		$this->on_start();
	}

	function set($name,$value) {
		$this->_template->set($name,$value);
	}

	function __destruct() {
			$this->_template->render();
			
	}
	function redirect($url = null){
		if(isset($url['controller']) && !isset($url['view'])){
			header("Location: ".FRAMEWORK.$url['controller']);
		}
		if(isset($url['controller']) && isset($url['view'])){
			header("Location: ".FRAMEWORK.$url['controller'] . '/' . $url['view']);
		}		
		if(!isset($url['controller']) && isset($url['view'])){
			header("Location: ".$url);
		}		
	}
}
