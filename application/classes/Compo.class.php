<?php

class Compo {

	private $id;
	private $game;
	
	public function __construct($id, $game) {
		$this->id = $id;
		$this->id = $game;
	}

	public function get_id() {
		return $this->id;
	}

	public function set_id($id) {
		$this->id = $id;
	}

	public function get_game() {
		return $this->game;
	}

	public function set_game(Game $game) {
		$this->game = $game;
	}
}