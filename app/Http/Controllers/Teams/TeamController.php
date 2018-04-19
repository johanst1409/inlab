<?php
/**
 * Created by PhpStorm.
 * User: valenciohoffman
 * Date: 10-03-18
 * Time: 23:38
 */

namespace App\Http\Controllers\Teams;

use App\Http\Controllers\Controller;
use App\Mail\SendInvite;
use App\Models\Invite;
use App\Models\Team;
use App\Models\UserTeam;
use App\Notifications\TeamInviteNotification;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TeamController extends Controller
{

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
	public function index()
	{
		$teams = [];
		if ( Auth::check() )
		{
			/** @var User */
			$user = Auth::user();
			$teams = $user->teams;
		}

		return view( 'teams.index', [ 'teams' => $teams ]);
	}

	public function show(Team $team)
	{
		return view('teams.team', ['team' => $team ]);
	}

	public function create()
	{
		return view('teams.create');
	}

	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|min:8'
		]);
		$team = Team::create([
			'name' => $request->input('name')
		]);

		$user_id = Auth::user()->id;
		UserTeam::create([
			'user_id' => $user_id,
			'owner_id' => $user_id,
			'team_id' => $team->id
		]);
		return redirect('/teams');
	}

	public function invite(Team $team, Request $request)
	{
		$this->validate($request, [
			'name' => 'required|min:8'
		]);

		// TODO if message is empty do standard one

		try
		{
			$currUser = Auth::user();
			$user = User::where( 'username', '=', $request->input( 'name' ) )->firstOrFail();
			$invite = Invite::create([
				'from_id' => $currUser->id,
				'user_id' => $user->id,
				'team_id' => $team->id,
				'message' => $request->input('message')
			]);

			$user->notify(new TeamInviteNotification($currUser->username, $user, $invite));
			// Mail::to($user)->send(new SendInvite($user, $invite));

			return redirect('/teams/'. $team->id);

		} catch (ModelNotFoundException $e) {
			// TODO Show errors
		}

		return redirect()->back();
	}
}
