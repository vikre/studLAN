<?php 

class Crew extends Role {
	public function __construct($id = 0, $access = 0) {
		if ($id === 0 && $access === 0) {
			// Fetch info about crewrole from database
			// Check if values from database actual exist
		}
		parent::__construct($id, $access);	
	}
}