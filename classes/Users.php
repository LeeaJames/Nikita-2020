<?php
class Users extends Dbh {

	protected function getUser($name) {
		$sql = "SELECT * FROM people WHERE first_name = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$name]);

		$results = $stmt->fetchAll();
		return $results;
	}

	protected function setUser($firstname,$lastname,$email) {
		$sql = "INSERT INTO people(first_name, last_name, email) VALUES (?, ?, ?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$firstname,$lastname,$email]);
	}

	protected function getPendingQuotes() {
		$sql = "SELECT * FROM quotes WHERE status = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['pending']);

		$results = $stmt->fetchAll();
		return $results;
	}

	protected function getActiveQuotes() {
		$sql = "SELECT * FROM quotes WHERE status = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['active']);

		$results = $stmt->fetchAll();
		return $results;
	}

	protected function getAllJobs() {
		$sql = "SELECT * FROM quotes WHERE status = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['active']);

		$results = $stmt->fetchAll();
		return $results;
	}


	protected function getDayToDay() {
		$sql = "SELECT * FROM office WHERE status = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['in']);

		$results = $stmt->fetchAll();
		return $results;
	}

	protected function getBookingView() {
		$sql = "SELECT * FROM office WHERE status = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['in']);

		$results = $stmt->fetchAll();
		return $results;
	}

	protected function getPendingChange() {
		$sql = "SELECT * FROM office WHERE status = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute(['in']);

		$results = $stmt->fetchAll();
		return $results;
	}



	


}




