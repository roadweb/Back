<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Job;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $jobs = Job::all();
        $posts = Post::published()->orderBy('created_at', 'desc')->where('category_id', '1')->get()->take(3);
        $vignettes = Post::published()->orderBy('created_at', 'desc')->where('category_id', '1' and 'is_sticky', '0')->skip(3)->take(6)->get();
        return view('pages.home.index', compact('jobs', 'posts', 'vignettes'));
    }

    public function landing()
    {
        return view('pages.landing.index');
    }

}
