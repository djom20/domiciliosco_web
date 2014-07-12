<?php

class Additional extends Eloquent {

	protected $table = 'additional';
	protected $fillable = array('id', 'name', 'description', 'price', 'menu', 'restaurant', 'state');

	public function getKey(){ return $this->id; }
	public function getName(){ return $this->name; }
	public function getDescription(){ return $this->description; }
	public function getPrice(){ return $this->price; }
	public function getMenu(){ return $this->menu; }
	public function getRestaurant(){ return $this->restaurant; }
	public function getState(){ return $this->state; }

}