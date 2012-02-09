<?php

abstract class Role {
	
	private _$id;
	private $access;

	public function __construct($id, $access) {
		$this->_id = $id;
		$this->access = $access;
	}

	public function get_id() {
		return $this->_id;
	}

	public function get_access() {
		return $this->access;
	}

	public function set_access($access) {
		// Update access in DB!
	}

	public function get_instance($id) {
		// Return instance of role based on id in database.
	} 
}