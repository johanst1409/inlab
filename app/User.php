<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Profile;
use App\Models\Team;
use App\Models\UserTeam;

/**
 * @method static User where(string $column, string $compare, string $value)
 * @method User firstOrFail()
 *
 * @property  string $id
 * @property  string $username
 * @property  string $email
 * @property  string $password
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
	 * Returns a belongs to many relationship
	 * with inside the teams from the user.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
    public function teams()
    {
	    return $this->belongsToMany(Team::class, 'user_team', 'user_id', 'team_id');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }
}
