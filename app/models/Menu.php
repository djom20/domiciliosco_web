<?php

class Menu extends Eloquent {

	protected $table = 'menus';
	protected $fillable = array('id', 'restaurant', 'category', 'name', 'description', 'price', 'aditional', 'state');

	public function getKey(){ return $this->id; }
	public function getRestaurant(){ return $this->restaurant; }
	public function getCategory(){ return $this->category; }
	public function getName(){ return $this->name; }
	public function getDescription(){ return $this->description; }
	public function getPrice(){ return $this->price; }
	public function getAditional(){ return $this->aditional; }
	public function getState(){ return $this->state; }

}