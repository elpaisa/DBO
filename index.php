<?php
/**
 * Copyright © 2015, Graphics Inc. Colombia
 * clientes@desarrollowebmedellin.com
 * www.desarrollowebmedellin.com
 *
 * @created 31/07/2013
 */
define('Framework', true);
define('DEBUG', true);
define('PREFIX', 'test_');

require_once 'classes/DBO.php';

$pdoConfig              = new stdClass();
$pdoConfig->_database   = 'test';
$pdoConfig->_server     = 'localhost';
$pdoConfig->_user       = 'root';
$pdoConfig->_password   = '0000';
$pdoConfig->_engine     = 'mysql';
$pdoConfig->_showErrors = DEBUG;

$DBO      = new DBO($pdoConfig);


#Test data
$apiKey = 'Akz959Qzbs2LcvRa2Zd2Q1fjieOUTAPc';

$results = $DBO->query("SELECT * FROM {users} WHERE api_key = ? ", $apiKey);

print_r($results);


$results = $DBO->query("SELECT * FROM {users} WHERE user_id = %d ", 12);

print_r($results);