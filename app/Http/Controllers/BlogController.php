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
        $posts = Post::orderByRaw('RAND()')->where('is_sticky', 'on')->get()->take(3);

        $vignettes = Post::published()->orderBy('created_at', 'desc')->take(1000)->get();

        return view('pages.blog.index', compact('posts', 'vignettes'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function article($id)
    {
        $post = Post::findOrFail($id);
        $userPosts = Post::orderByRaw('RAND()')->where('user_id', $post->user->id)->orderBy('created_at', 'desc')->take(3)->get();
        $jobPosts = Post::orderByRaw('RAND()')->where('job_id', $post->job->id)->get()->take(2);

        return view('pages.blog.article', compact('post', 'userPosts', 'jobPosts'));
    }

    public function allArticlesUser($id){

        $user = User::findOrFail($id);

        $vignettes = Post::published()->where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view ('pages.blog.all-articles-user', compact('user', 'vignettes'));
    }
}
