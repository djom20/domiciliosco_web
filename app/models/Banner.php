<?php

class Banner extends Eloquent {

	protected $table = 'banners';
	protected $fillable = array('id', 'image', 'link', 'description', 'state');

	public function getKey(){ return $this->id; }
	public function getImage(){ return $this->image; }
	public function getUrl(){ return $this->link; }
	public function getDescription(){ return $this->description; }
	public function getState(){ return $this->state; }

}