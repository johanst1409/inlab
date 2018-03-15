<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Country;

use Auth;

class AccountController extends Controller
{
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
    		// 'avatar_image' => 'required',
    		// 'description' => 'required',
    		// 'birth_date' => 'required'
    	]);
    }
}
