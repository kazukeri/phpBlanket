<?php session_start();

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
//WCZYTANIE BIBLIOTEK PHPILLOW
$autoloadPillow = require ( $base =dirname( dirname( __FILE__ )) . '/db/phpillow/' ) . 'classes/autoload.php';			
foreach ( $autoloadPillow as $file ){
	require_once $base . $file;
}

//pliki widokow couch i dokumentow couch
foreach(glob(dirname( dirname( __FILE__ ))."/application/couchmodels/*.php") as $class_filename) {
     require_once($class_filename);
}

//componentow np auth
foreach(glob(dirname( dirname( __FILE__ ))."/application/components/*.php") as $class_filename) {
     require_once($class_filename);
}
//helpers np $html $form
foreach(glob(dirname( dirname( __FILE__ ))."/library/helpers/*.php") as $class_filename) {
     require_once($class_filename);
}
//Tu moze byc problem, testowane tylko lokalnie
define('FRAMEWORK','http://'.$_SERVER["HTTP_HOST"]."/framework/");

//Gdzie przeniesc na starcie
$redirectEmpty = array("controller"=>'items',"view"=>'start');

if(!isset($_GET['url'])){
$_GET['url'] =  $redirectEmpty['controller'] . '/' . $redirectEmpty['view'];
}

$url = $_GET['url'];


require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');
