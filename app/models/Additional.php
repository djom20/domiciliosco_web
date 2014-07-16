<?php

class Additional extends Eloquent {

	protected $table = 'additional';
	protected $fillable = array('id', 'name', 'description', 'price', 'menu_id', 'restaurant_id', 'state');

	public function getKey(){ return $this->id; }
	public function getName(){ return $this->name; }
	public function getDescription(){ return $this->description; }
	public function getPrice(){ return $this->price; }
	public function getMenu(){ return $this->menu_id; }
	public function getRestaurant(){ return $this->restaurant_id; }
	public function getState(){ return $this->state; }

	public function setName($value){ $this->name = $value; }
	public function setDescription($value){ $this->description = $value; }
	public function setPrice($value){ $this->price = $value; }
	public function setMenu($value){ $this->menu_id = $value; }
	public function setRestaurant($value){ $this->restaurant_id = $value; }
	public function setState($value){ $this->state = $value; }

}