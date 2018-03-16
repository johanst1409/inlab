<?php
/**
 * Created by PhpStorm.
 * User: valenciohoffman
 * Date: 16-03-18
 * Time: 21:28
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 *
 *  * @static @method void create(array)
 *
 * @package App\Models
 */
class UserTeam extends Model
{
	protected $table = 'user_team';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'user_id', 'team_id', 'owner_id',
	];
}
