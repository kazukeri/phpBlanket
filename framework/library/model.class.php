<?php
class Model extends SQLQuery {
	protected $_model;

	function __construct() {

		if(DB_TYPE=="couchdb"){
			$this->couchConnect(CDB_HOST,CDB_USER,CDB_PASSWORD,CDB_PORT,CDB_NAME);
		}else{
			$this->connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		}
		
		$this->_model = get_class($this);
		$this->_table = strtolower($this->_model)."s";
	}

	function __destruct() {
	}
}
