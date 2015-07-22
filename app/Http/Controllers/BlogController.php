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
        $posts = Post::orderByRaw('RAND()')->where('is_sticky', 'on')->get()->take(3);

        $vignettes = Post::published()->orderBy('created_at', 'desc')->take(1000)->get();

        return view('pages.blog.index', compact('posts', 'vignettes'));
    }

    public function article($id)
    {
        $post = Post::findOrFail($id);
        $userPosts = Post::orderByRaw('RAND()')->where('user_id', $post->user->id)->orderBy('created_at', 'desc')->take(3)->get();
        $jobPosts = Post::orderByRaw('RAND()')->where('job_id', $post->job->id)->get()->take(2);


        return view('pages.blog.article', compact('post', 'userPosts', 'jobPosts'));
    }
}
