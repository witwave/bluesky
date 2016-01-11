<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;

/* Columns
 *
 * id               (increment)
 * email            (string, unique)
 * password         (string, 60)
 * remember_token   (string)
 * persmissions     (text, nullable)
 * activated        (boolean, default 0)
 * activation_code  (string, nullable, index)
 * actiavted_at     (timestamp, nullable)
 * last_login       (timestamp, nullable)
 * persist_code     (string, nullable)
 * reset_password_code  (string, nullable, index)
 * first_name       (string, nullable)
 * last_name        (string, nullable)
 * created_at       (dateTime)
 * updated_at       (dateTime)
 *
 */

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {
	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password','nickname'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function groups() {
		// Based on Cartalyst/Sentry SQL schema
		return $this->belongsToMany('App\Models\Group', 'users_groups');
	}

	public function orders() {
		return $this->hasMany('App\Models\Order');
	}

	public function addresses() {
		return $this->hasMany('App\Models\UserAddress');
	}

	public function days() {
		return $this->hasMany('App\Models\UserDay');
	}

	public function cart() {
		return $this->hasOne('App\Models\UserCart');
	}

	public function delete() {
		$this->groups()->detach();

		return parent::delete();
	}
}
