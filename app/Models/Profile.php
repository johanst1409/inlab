<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Models\Country;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
    	'user_id',
    	'country_id',
    	'avatar_path',
    	'avatar_image',
    	'birth_date',
    	'description'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function country()
    {
    	return $this->hasOne(Country::class, 'country_id', 'id');
    }
}
