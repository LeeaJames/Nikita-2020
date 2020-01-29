<?php
class Data extends Dbh {

	//Unprepared data call
	// public function getAllNotPrepared(){
	// 	$sql = "SELECT * FROM people";
	// 	$stmt = $this->connect()->query($sql);
	// 	while ($row = $stmt->fetch()) {
	// 		echo "<pre>";
	// 	 	print_r($row['email']);
	// 	 	echo "</pre>";
	// 	 } 
	// }

	//Prepared statement data call
	public function getAllStmt($firstName, $lastName){
		$sql = "SELECT * FROM people WHERE first_name = ? AND last_name = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$firstName, $lastName]);
		$names = $stmt->fetchAll();

		foreach ($names as $name) {
			echo $name['first_name'] . "<br>";
		}
	}
}