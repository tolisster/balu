<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use Storage;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class UserController extends Controller {

	/**
	 * Show the profile for the given user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showProfile(Request $request, $id)
	{
		$user = User::findOrFail($id);

		$view = view('users.profile', [
			'user' => $user
		]);

		return $view;
	}
}