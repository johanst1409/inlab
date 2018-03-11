<?php

namespace App;

use App\Models\Team;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/*
 * @method \Illuminate\Database\Eloquent\Relations\BelongsToMany teams()
 *
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	/**
	 * Returns a many-to-many relationship
	 * with inside the teams from the user.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
    public function teams() {
    	return $this->belongsToMany(Team::class, 'users_teams', 'user_id');
    }
}
