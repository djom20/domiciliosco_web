<?php

class Restaurant extends Eloquent {

	protected $table = 'restaurants';
	protected $fillable = array('id', 'name', 'description', 'food', 'user', 'image', 'email', 'address', 'lng', 'lat', 'send_to_central', 'monday_open', 'monday_closed', 'tuesday_open', 'tuesday_closed', 'wednesday_open', 'wednesday_closed', 'thursday_open', 'thursday_closed', 'friday_open', 'friday_closed', 'saturday_open', 'saturday_closed', 'sunday_open', 'sunday_closed', 'state');

	public function getKey(){ return $this->id; }
	public function getName(){ return $this->name; }
	public function getDescription(){ return $this->description; }
	public function getFood(){ return $this->food; }
	public function getUser(){ return $this->user; }
	public function getLogo(){ return $this->image; }
	public function getEmail(){ return $this->email; }
	public function getAddress(){ return $this->address; }
	public function getLng(){ return $this->lng; }
	public function getLat(){ return $this->lat; }
	public function getSend_to_central(){ return $this->send_to_central; }
	// public function getMonday_open(){ return $this->monday_open; }
	// public function getMonday_closed(){ return $this->monday_closed; }
	// public function getTuesday_open(){ return $this->tuesday_open; }
	// public function getTuesday_closed(){ return $this->tuesday_closed; }
	// public function getWednesday_open(){ return $this->wednesday_open; }
	// public function getWednesday_closed(){ return $this->wednesday_closed; }
	// public function getThursday_open(){ return $this->thursday_open; }
	// public function getThursday_closed(){ return $this->thursday_closed; }
	// public function getFriday_open(){ return $this->friday_open; }
	// public function getFriday_closed(){ return $this->friday_closed; }
	// public function getSaturday_open(){ return $this->saturday_open; }
	// public function getSaturday_closed(){ return $this->saturday_closed; }
	// public function getSunday_open(){ return $this->sunday_open; }
	// public function getSunday_closed(){ return $this->sunday_closed; }
	public function getState(){ return $this->state; }


	public function isOpen(){
		return $this->state;
	}

}