<?php
/**
 * Created by PhpStorm.
 * User: valenciohoffman
 * Date: 17-03-18
 * Time: 14:13
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static Invite create(Array $array)
 *
 * @property integer $id
 * @property integer $from_id
 * @property integer $user_id
 * @property integer $team_id
 * @property string $message
 */
class Invite extends Model
{
	protected $table = 'invites';

	protected $fillable = [
		'from_id', 'user_id', 'team_id','message'
	];

	public function name()
	{
		return Team::where('id', $this->team_id)->pluck('name')->toArray()[0];
	}
}
