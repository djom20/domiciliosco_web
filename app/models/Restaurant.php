<?php

class Restaurant extends Eloquent {

	protected $table = 'restaurants';
	protected $fillable = array('id', 'name', 'description', 'restaurants_category_id', 'user', 'image', 'email', 'address', 'lng', 'lat', 'send_to_central', 'monday_open', 'monday_closed', 'tuesday_open', 'tuesday_closed', 'wednesday_open', 'wednesday_closed', 'thursday_open', 'thursday_closed', 'friday_open', 'friday_closed', 'saturday_open', 'saturday_closed', 'sunday_open', 'sunday_closed', 'state');

	public function getKey(){ return $this->id; }
	public function getName(){ return $this->name; }
	public function getDescription(){ return $this->description; }
	public function getAdditional(){ return $this->food; }
	public function getCategory(){ return $this->restaurants_category_id; }
	public function getUser(){ return $this->user; }
	public function getLogo(){ return $this->image; }
	public function getEmail(){ return $this->email; }
	public function getAddress(){ return $this->address; }
	public function getLng(){ return $this->lng; }
	public function getLat(){ return $this->lat; }
	public function getSend_to_central(){ return $this->send_to_central; }
	public function getState(){ return $this->state; }


	public function isOpen(){
		return $this->state;
	}

}