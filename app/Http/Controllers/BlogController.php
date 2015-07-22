<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
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

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function article($id)
    {
        $post = Post::findOrFail($id);
        $userPosts = Post::where('user_id', $post->user->id)->orderBy('created_at', 'desc')->take(2)->get();

        return view('pages.blog.article', compact('post', 'userPosts'));
    }
}
