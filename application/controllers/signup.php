<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construnct() {
		parent::__construct();
	}
	
	public function index() {
		$this->load->view('signup');
	}
}