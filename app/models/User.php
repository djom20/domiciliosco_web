<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	protected $fillable = array('name','email','password','age','sex','address','cellphone','state','recovery_passw','create_at','updated_at');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getName(){ return $this->name; }
	public function getRole(){ return 1; }
	public function getAge(){ return $this->age; }
	public function getSex(){ return $this->sex; }
	public function getAddress(){ return $this->address; }
	public function getCellphone(){ return $this->cellphone; }
	public function getState(){ return $this->state; }
	public function getRecoveryPassword(){ return $this->recovery_passw; }

}