<?php
class Userscontr extends Users {

	public function createUser($firstname,$lastname,$email) {
		$this->setUser($firstname,$lastname,$email);
	}
	
}