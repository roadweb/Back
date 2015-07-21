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
        $posts = Post::published()->where('is_sticky', 'on')->get()->take(3);

        $vignettes = Post::published()->orderBy('created_at', 'desc')->where('is_sticky', '0')->get();

        return view('pages.blog.index', compact('posts', 'vignettes'));
    }

     

    public function article($id)
    {
        return view('pages.blog.article');
    }
}
