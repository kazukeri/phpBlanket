<?php

/** Configuration Variables **/

define ('DEVELOPMENT_ENVIRONMENT',true);

//RANDOM HASH STRING
define ('HASH_STRING','2d5A212fE35c');
//Typ bazy
define('DB_TYPE', 'couchdb'); //couchdb, mysql
//MYSQL
define('DB_NAME', 'yourdatabasename');
define('DB_USER', 'yourusername');
define('DB_PASSWORD', 'yourpassword');
define('DB_HOST', 'localhost');
//couchDB
define('CDB_USER', '');
define('CDB_PASSWORD', '');
define('CDB_HOST', '127.0.0.1');
define('CDB_PORT', '5984');
define('CDB_NAME', 'baza'); //nazwa bazy
			phpillowConnection::createInstance(CDB_HOST, CDB_PORT, CDB_USER, CDB_PASSWORD);
			phpillowConnection::setDatabase( CDB_NAME );