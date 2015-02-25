<?php namespace App\Models;

class Recipe {

	private $directions;

	private $ingredients;

	private $prep_time;

	private $cook_time;

	private $servings;

	public function __construct() {

	}

	public function setDirections($directions) {
		$this->directions = $directions;
	}

	public function setIngredients($ingredients) {
		$this->ingredients = $ingredients;
	}

	public function setPrepTime($prep_time) {
		$this->prep_time = $prep_time;
	}

	public function setCookTime($cook_time) {
		$this->cook_time = $cook_time;
	}

	public function setServings($servings) {
		$this->servings = $servings;
	}
}