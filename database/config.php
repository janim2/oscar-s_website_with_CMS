
<?php

/*
	PDO (PHP Data Objects)
	I prefer this connection to mysqli based on performance and simplicity.
*/

try {
	$con /*just a variable to hold the connection and use in all pages*/ = new PDO(dsn: 'mysql:host=localhost; dbname=oscar_portfolio', username: 'root'/*username*/, password: ''/*password*/);
	$con->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION); //This prevents PDO from displaying the default error and the error's behaviour
}catch (PDOException $e/*This catches an exception or error when trying to connect to database and casts the error to $e*/){
	die("Sorry... Encountered a database problem."); //die kills the page. ie. the rest of the page won't work when you require or include in php.
}
