<?php
/**
 * Created by PhpStorm.
 * User: valenciohoffman
 * Date: 10-03-18
 * Time: 23:38
 */

namespace App\Http\Controllers\Teams;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$teams = [];
		if ( Auth::check() ) {
			$teams = Auth::user()->teams;
		}

		return view( 'teams.index', [ 'teams' => $teams ] );
	}

	public function show(Team $team) {
		return view('teams.index', ['team' => $team ]);
	}
}
