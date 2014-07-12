<?php

class MenuCategory extends Eloquent {

	protected $table = 'menus_category';
	protected $fillable = array('id', 'name', 'state');

	public function getKey(){ return $this->id; }
	public function getName(){ return $this->name; }
	public function getState(){ return $this->state; }

}