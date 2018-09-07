<?php 

require_once ('config.php');

class MyDbase
{
	private $conn;
	private $magic_qoutes_active;
	private $new_enough_php;
	public $perPage = 5;

	function __construct()
	{
		$this->open_conn();
		$this->magic_qoutes_active = get_magic_quotes_gpc();
		$this->new_enough_php = function_exists("mysql_real_escape_string");
	}

	/**
	 * Opening Connection
	 */
	public function open_conn()
	{
		try {
			$this->conn = new PDO("mysql:host=db_server;dbname=db_name",db_uname,db_pw);
		} catch (PDOException $e) {
			die('Database Connection Error, because : ' .$e->getMessage());
		}
	}

	/**
	 * Closing Connection
	 */
	public function close_conn()
	{
		if (isset($this->conn)) {
			mysql_close($this->conn);
			unset($this->conn);
		}
	}
}

	/** Class name */
	$dbase = new MyDbase;
	
 ?>