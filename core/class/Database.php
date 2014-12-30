<?php
/**
 * @author Sibren Talens <sibrentalens@gmail.com>
 * @copyright 2014-2015 Sibren Talens
 * @license http://sibrentalens.eu/license Apache License
 */
class Database{
	/**
	 * @var PDO $_pdo		The PDO object
	 */
	private $_pdo;

	/**
	 * The constructor function of the Database class
	 * @param  string $dbname   The name of the database to connect to
	 * @param  string $username The username to log in with
	 * @param  string $password The password to log in with
	 * @param  string $host     The databases' host, usually localhost (127.0.0.1)
	 * @return void
	 */
	public function __construct($dbname, $username, $password, $host = '127.0.0.1'){
		try{
			$this->_pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	/**
	 * Queries the given string
	 * @param  string $qstr The string to be executed
	 * @return mixed       	The result
	 */
	private function query($qstr){

	}

	/**
	 * Assigns null to _pdo, which closes the connection
	 */
	public function __destruct(){
		$this->_pdo = null;
	}
}