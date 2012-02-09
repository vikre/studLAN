<?php 
class User {
	
	private $id;
	private $email;
	private $firstname;
	private $lastname;
	private $phonenumber;
	private $birthdate;
	private $postalcode;
	private $adress;
	private $username;
	private $password;
	private $salt;
	private $seater;
	private $organization;

	public function __construct($email, $firsnamt, $lastname, $phonenumber, $birthdate, $postalcode, $address, $username, $password, $salt, $seater, $organization = null, $id = 0) {
		
		$this->id = $id;
		$this->email = $email;
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->phonenumber = $phonenumber;
		$this->birthdate = $birthdate;
		$this->postalcode = $postalcode;
		$this->address = $address;
		$this->username = $username;
		$this->password = $password;
		$this->salt = $salt;
		$this->seater = $seater:
		$this->organization = $organization;
	}

	public function get_id() {
		return $this->id;
	}

	public function set_id($id) {
		$this->id = $id;
	}

	public function get_email() {
		return $this->email;
	}

	public function set_email($email) {
		$this->email = $email;
	}

	public function get_firstname() {
		return $this->firstname;
	}

	public function set_firstname($firstname) {
		$this->firsname = $firstname;
	}

	public function get_lastname() {
		return $this->lastname;
	}

	public function set_lastname($lastname) {
		$this->lastname = $lastname;
	}

	public function get_phonenumber() {
		return $this->phonenumber();
	}

	public function set_phonenumber($phonenumber) {
		$this->phonenumber = $phonenumber;
	}

	public function get_birthdate() {
		return $this->birthdate;
	}

	public function set_birthdate($birthdate) {
		$this->birthdate = $birthdate;
	}

	public function get_postalcode() {
		return $this->postalcode;
	}

	public function set_postalcode($postalcode) {
		$this->postalcode = $postalcode;
	}

	public function get_address() {
		return $this->address;
	}

	public function set_address($address) {
		$this->address = $address;
	}

	public function get_username() {
		return $this->username;
	}

	public function set_username($username) {
		$this->username = $username;
	}

	public function get_password() {
		return $this->password;
	}

	public function set_password($password) {
		$this->password = $password;
	}

	public function get_salt() {
		return $this->salt;
	}

	public function set_salt($salt) {
		$this->salt = $salt;
	}

	public function get_seater() {
		return $this->seater;
	}

	public function set_seater($seater) {
		if ($seater instanceof User) {
			$this->seater = $seater;
			return;
		} 
		return null;
	}

	public function get_organization() {
		return $this->organization;
	}

	public function set_organization($organization) {
		if ($organization instanceof Organization) {
			$this->organization = $organization;
			return;
		}
		return null;
	}
}

