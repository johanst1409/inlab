<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function getBigAvatarAttribute()
    {
    	return $this->avatar_path.'/big/'.$this->avatar_image;
    }

    public function getMediumAvatarAttribute()
    {
    	return $this->avatar_path.'/medium/'.$this->avatar_image;
    }

    public function getSmallAvatarAttribute()
    {
    	return $this->avatar_path.'/small/'.$this->avatar_image;
    }

    public function getAgeAttribute()
    {
    	return Carbon::createFromFormat('Y-m-d', $this->birth_date)->diffInYears(Carbon::now());
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function country()
    {
    	return $this->hasOne(Country::class, 'id', 'country_id');
    }
}
