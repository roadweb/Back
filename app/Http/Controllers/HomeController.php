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
        $posts = Post::orderByRaw('RAND()')->where('is_sticky', 'on')->get()->take(3);
        $vignettes = Post::orderByRaw('RAND()')->orderBy('created_at', 'desc')->where('is_sticky', '0')->get()->take(6);
        return view('pages.home.index', compact('jobs', 'posts', 'vignettes'));
    }

    public function landing()
    {
        return view('pages.landing.index');
    }

}
