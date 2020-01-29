<?php
class Dbh {
	private $servername = "";
	private $username = "";
	private $password = "";
	private $dbname = "";
	private $charset = "";

	// ---------------------------------------------------------------mysqli connection
	// protected function connect(){

	// 	$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
	// 	return $conn;
	// }

	// ---------------------------------------------------------------PDO connection
	public function connect() {
		try {
			$dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname;
			$pdo = new PDO($dsn, $this->username, $this->password);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			return $pdo;
		} catch (PDOException $e) {
			echo "Connection Failed: " . $e->getMessage();
		}
	}

}