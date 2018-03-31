<?php
/**
 * Created by PhpStorm.
 * User: valenciohoffman
 * Date: 10-03-18
 * Time: 15:54
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * Class Team
 *
 *  @method static Team create(Array $array)
 *  @method static Team find(integer $id);
 *  @method static Team where(String $column_name, $value);
 *  @method Team pluck(String $pluck_value);
 *  @method Array toArray();
 *
 * @property string $name
 * @property integer $id
 *
 * @package App\Models
 */
class Team extends Model {

	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name'
	];
}
