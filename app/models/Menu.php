<?php

class Menu extends Eloquent {

	protected $table = 'menus';
	protected $fillable = array('id', 'restaurant_id', 'category_id', 'name', 'description', 'price', 'aditional', 'state');

	public function getKey(){ return $this->id; }
	public function getRestaurant(){ return $this->restaurant_id; }
	public function getCategory(){ return $this->category_id; }
	public function getName(){ return $this->name; }
	public function getDescription(){ return $this->description; }
	public function getPrice(){ return $this->price; }
	public function getAditional(){ return $this->aditional; }
	public function getState(){ return $this->state; }

	public function setRestaurant($value){ $this->restaurant_id = $value; }
	public function setCategory($value){ $this->category_id = $value; }
	public function setName($value){ $this->name = $value; }
	public function setDescription($value){ $this->description = $value; }
	public function setPrice($value){ $this->price = $value; }
	public function setAditional($value){ $this->aditional = $value; }
	public function setState($value){ $this->state = $value; }

}