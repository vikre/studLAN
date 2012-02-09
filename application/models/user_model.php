<?php 

class User_model extends CI_Model {

	public function __construct() {
		
	}

	public function check_login_info($user, $password) {
		
		if (strlen($user) < 2) {
			return false;
		}

		// Get encryption-key from config
		// Get user from database by using username and encryption-key + password + salt to identify.
		// If no user is found, return null
		// Return new userobject if user is found with correct role.
	}
}