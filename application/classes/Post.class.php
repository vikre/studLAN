<?php
class Post {

	private $id;
	private $title;
	private $date;
	private $text;
	private $user
	private $category;

	public function __construct($id, $title, $date, $text, user, $category) {

		$this->id = $id;
		$this->title = $title;
		$this->date = $date;
		$this->text = $text;
		$this->user_id = $user_id;
		$this->category_id = $category_id;
	}

	public function get_id() {
		return $this->id;
	}
	public function set_id($id) {
		$this->id = $id;
	}

	public function get_title() {
		return $this->title;
	}
	public function set_title($title) {
		$this->title = $title;
	}

	public function get_date() {
		return $this->date;
	}
	public function set_date($date) {
		$this->date = $date;
	}

	public function get_text() {
		return $this->text;
	}
	public function set_text($text) {
		$this->text = $text;
	}

	public function get_user_id() {
		return $this->user_id;
	}
	public function set_user_id(User $user) {
		$this->user = $user;
	}
	
	public function get_category_id() {
		return $this->category_id;
	}
	public function set_category_id(Category $category) {
		$this->category = $category;
	}
}
