<?php namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller as Controller;
use App\Job;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $req = Post::with('user')->with('category')->with('job')->orderBy('updated_at', 'desc');
        if ($request->has('filterBy')) {
            $req->where($request->get('filterBy') . '_id', $request->get('id'));
        }
        $posts = $req->get();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Montre la vue pour créer un article
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $auth_id = Auth::user()->id;
        $categories = Category::lists('name', 'id');
        $jobs = Job::lists('name', 'id');


        return view('admin.posts.create', compact('auth_id', 'categories', 'jobs'));
    }

    /**
     * Permet d'enregistrer un article
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect(route('admin.posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $post = Post::findOrFail($id);

        if ($request->has('publication')) {
            $post->published = $request->get('publication');
            $post->save();
        }

        return redirect(route('admin.posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect(route('admin.posts.index'));
    }
}