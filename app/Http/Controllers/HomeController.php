<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::published()->get()->take(3);
        return view('pages.home.index', compact('posts'));
    }

    public function landing()
    {
        return view('pages.landing.index');
    }

}
