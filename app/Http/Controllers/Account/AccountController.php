<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Country;

use Auth;
use Image;

class AccountController extends Controller
{
    protected $sizes = [
        'small' => 250,
    ];

    public function index ()
    {
    	return view('accounts.index');
    }

    public function edit()
    {
    	$countries = Country::all();
    	return view('accounts.edit', compact('countries'));
    }

    public function save(Request $request)
    {
    	// TODO: write the save method
    	$request->validate([
    		/*
            // TODO: Validatie regels schrijven
            'avatar' => 'required',
    		'description' => 'required',
    		'birth_date' => 'date'
            'country_id' => 'required'
            */
    	]);

        $user = Auth::user();

        $avatar_path = 'public/'.$user->username.'/'.'avatar/';
        $avatar_image = str_random(20).'.jpg';

        if ($request->hasFile('avatar')) {
            // TODO: fileupload
            $file = Image::make($request->file('avatar'))->encode('jpg', 100);
            Storage::put('/'.$avatar_path.$avatar_image, $file);
            // $file->save($avatar_path);
            foreach ($this->sizes as $name => $size) {
                // TODO: resize
                $file = Image::make($request->file('avatar'))->fit($size, $size)->encode('jpg', 100);
                Storage::put('/'.$avatar_path.$name.'/'.$avatar_image, $file);
            }

        }

        $profile = $user->profile;

        $profile->update([
        'country_id' => $request->get('country_id'),
        'avatar_path' => $avatar_path,
        'avatar_image' => $avatar_image,
        'birth_date' => $request->get('birth_date'),
        'description' => $request->get('description')
        ]);

        return redirect()->route('account.index');
    }
}
