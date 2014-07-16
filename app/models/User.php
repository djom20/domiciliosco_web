<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	protected $fillable = array('name','email','password','age','sex','address','cellphone','state','recovery_passw','create_at','updated_at');
	protected $table = 'users';
	protected $hidden = array('password');

	public function getAuthIdentifier(){ return $this->getKey(); }
	public function getAuthPassword(){ return $this->password; }
	public function getReminderEmail(){ return $this->email; }

	public function getName(){ return $this->name; }
	public function getRoleName(){ return $this->belongsTo('Rol'); }
	public function getRole(){ return 1; }
	public function getAge(){ return $this->age; }
	public function getSex(){ return $this->sex; }
	public function getAddress(){ return $this->address; }
	public function getCellphone(){ return $this->cellphone; }
	public function getState(){ return $this->state; }
	public function getRecoveryPassword(){ return $this->recovery_passw; }

}