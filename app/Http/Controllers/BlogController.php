<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::published()->get()->take(3);
        return view('pages.blog.index', compact('posts'));
    }

    public function article($id)
    {
        return view('pages.blog.article');
    }
}
