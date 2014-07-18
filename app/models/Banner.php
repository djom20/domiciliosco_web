<?php

class Banner extends Eloquent {

	protected $table = 'banners';
	protected $fillable = array('id', 'image', 'link', 'description', 'state');

	public function getKey(){ return $this->id; }
	public function getImage(){ return $this->image; }
	public function getLink(){ return $this->link; }
	public function getDescription(){ return $this->description; }
	public function getState(){ return $this->state; }

	public function setImage($value){ $this->image = $value; }
	public function setLink($value){ $this->link = $value; }
	public function setDescription($value){ $this->description = $value; }
	public function setState($value){ $this->state = $value; }

}