<?php

class Rol extends Eloquent {

	protected $table = 'roles';
	protected $fillable = array('id', 'name');

	public function getKey(){ return $this->id; }
	public function getName(){ return $this->name; }
	public function getUsers(){ return $this->hasMany('User'); }

}