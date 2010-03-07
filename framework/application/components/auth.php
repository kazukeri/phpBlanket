<?php

class AuthComponent{

	protected $redirect = array("controller"=>"users", "view"=>"login");
//	protected $loggedRedirect = array("controller"=>"users", "view"=>"login");
	protected $loginRequired = false;
	
	function isLogged(){
		
	}
	
	function login($params) {
		$_SESSION["auth_session"]= "logged";
		foreach($params as $key => $param){
			$_SESSION["auth_".$key]= $param;
		}

	}
	function logout() {
		session_destroy();
	}
	function needLogin(){
	//	if($loginRequired){
		
	//	$_GET['url'] =  $redirect['controller'] . '/' . $redirect['view'];
	//	$url = $_GET['url'];
	//	}
//	echo "WYMAGA LOGOWANIA";
	if(!isset($_SESSION["auth_session"])){
		header("Location: ".FRAMEWORK.$this->redirect['controller'] . '/' . $this->redirect['view']);
	}
	
		
	}

}
