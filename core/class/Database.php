<?php
/**
 * @author Sibren Talens <sibrentalens@gmail.com>
 * @copyright 2014-2015 Sibren Talens
 * @license http://sibrentalens.eu/license Apache License
 *
 * @method {void} __constuct() __constuct($dbname, $username, $password, $host) The constructor
 */
public class Database{
	/**
	 * @var PDO         $_pdo   The PDO object, or DBH (DataBase Handler)
	 * @var PDOExeption $_error Any errors occurred while connecting will go here
	 */
	private $_pdo, $_error, $_stmt;

	/**
	 * The constructor function of the Database class
	 * @param  string $dbname   The name of the database to connect to
	 * @param  string $username The username to log in with
	 * @param  string $password The password to log in with
	 * @param  string $host     The databases' host, usually localhost (127.0.0.1)
	 * @param  array  $options  Options set while connecting to the database
	 * @return void
	 */
	public function __construct(string $dbname, string $username, string $password, string $host = '127.0.0.1', array $options = []){
		try{
			// Attempts to create a new PDO statement using the data provided as an argument
			$this->_pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password, $options);
		}catch(PDOException $e){
			// Kills the script and throws an error if connecting fails
			die($e->getMessage());
		}
	}

	/**
	 * Queries the given string
	 * @param  string $qstr The string to be executed
	 * @return array       	The result
	 */
	private function query(string $qstr){

	}

	/**
	 * Gets rows from a table (SELECT)
	 * @param  string $table The table to select items from
	 * @param  string $what  Which rows to select
	 * @param  string $where The condition for 
	 * @return array         The result of the query
	 */
	public function get(string $table, string $what, string $where, int $limit = null){

	}

	/**
	 * Assigns null to _pdo, which closes the connection
	 */
	public function __destruct(){
		// Closes the connection at the last time the instance is used
		$this->_pdo = null;
	}
}
