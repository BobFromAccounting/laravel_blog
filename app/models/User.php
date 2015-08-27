<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use Bbatsche\Entrust\Contracts\EntrustUserInterface;
use Bbatsche\Entrust\Traits\EntrustUserTrait;

class User extends BaseModel implements ConfideUserInterface, EntrustUserInterface {

	use ConfideUser, EntrustUserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public function posts()
	{
		return $this->hasMany('Post');
	}

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static $rules = array(
        'first_name'  => 'required|max:100',
        'last_name'   => 'required|max:100',
        'email'       => 'required|max:100'
    );
}
