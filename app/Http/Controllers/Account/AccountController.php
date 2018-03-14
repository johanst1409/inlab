<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AccountController extends Controller
{
    public function index ()
    {
    	return view('accounts.index');
    }
}
