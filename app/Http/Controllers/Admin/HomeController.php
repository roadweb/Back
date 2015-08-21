<?php namespace App\Http\Controllers\Admin;

use App\Job;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use App\User;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/*
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $user = Auth::user();

        $posts = Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->take(6)->get();
        $rwposts = Post::orderBy('created_at', 'desc')->take(6)->get();

		return view('admin.home', compact('user', 'posts', 'jobs', 'charts', 'rwposts'));
	}

}
