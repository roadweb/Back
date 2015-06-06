<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Category;
use App\Job;
use App\Question;
use App\Post;
use App\User;

use Illuminate\Http\Request;

class StatsController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts_published = Post::published()->count();
        $posts_editing = Post::where('published', '0')->count();
        $posts_sticky = Post::where('is_sticky', 'on')->count();
        $posts = Post::count();


        $users = User::count();


        $jobs = Job::count();

        $questions = Question::count();

        $categories = Category::count();

        return view('admin.stats.index', compact('posts', 'posts_published', 'posts_sticky', 'posts_editing', 'users', 'jobs', 'questions', 'categories'));
	}
}
