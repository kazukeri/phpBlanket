<?php
class Template {

	protected $variables = array();
	protected $_controller;
	protected $_action;
	protected $helpers;
	
	function __construct($controller,$action,$helpers) {
		$this->_controller = $controller;
		$this->_action = $action;
		$this->helpers = $helpers;
	}

	/** Set Variables **/

	function set($name,$value) {
		$this->variables[$name] = $value;
	}

	/** Display Template **/

    function render() {
		extract($this->variables);
		
		if(isset($this->helpers)){
			foreach($this->helpers as $helper){
				$classname = $helper."Helper";
				$objectname = strtolower ($helper);
				$$objectname = new $classname;
			
			}		
		}

		
		
		
		include (ROOT . DS . 'application' . DS . 'views' . DS . 'layouts' . DS . 'layout' . '.php');		 
		
		/*
			if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . 'header.php')) {
				include (ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . 'header.php');
			} else {
				include (ROOT . DS . 'application' . DS . 'views' . DS . 'header.php');
			}

        include (ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . $this->_action . '.php');		 

			if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . 'footer.php')) {
				include (ROOT . DS . 'application' . DS . 'views' . DS . $this->_controller . DS . 'footer.php');
			} else {
				include (ROOT . DS . 'application' . DS . 'views' . DS . 'footer.php');
			}
		*/
    }

}
