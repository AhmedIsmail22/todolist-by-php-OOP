<?php

//Requires

require_once 'inc/connection.php';
require_once 'classes/Requests.php';
require_once 'classes/Header.php';
require_once 'classes/Session.php';
require_once 'classes/Validation/Validationinterface.php';
require_once 'classes/Validation/Required.php';
require_once 'classes/Validation/Str.php';
require_once 'classes/Validation/Len_of_string.php';
require_once 'classes/Validation/Validation.php';



//Objects

$request = new Requests;
$header = new Header;
$validation = new Validation;
$session = new Session;