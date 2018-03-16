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
use Illuminate\Http\Request;
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
		return view('teams.team', ['team' => $team ]);
	}

	public function create() {
		return view('teams.create', ['userId' => Auth::user()->id]);
	}

	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function store(Request $request) {
		$this->validate($request, [
			'name' => 'required|min:8'
		]);
		Team::create([
			'name' => $request->input('name'),
			'owner' => $request->input('owner')
		]);
		return redirect('/teams');
	}
}
