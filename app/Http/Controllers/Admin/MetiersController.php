<?php namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller as Controller;
use App\Job;
use App\Post;
use App\Techno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MetiersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $jobs = Job::lists('name', 'id');

//        $metier = Job::all();
//        $id = Job::where('id', $metier->id);
//        $fiches = Job::findOrFail($id);
        return view('admin.metiers.index', compact('fiches', 'jobs'));
    }

    /**
     * Montre la vue pour créer un article
     *
     * @return Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Permet d'enregistrer un article
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            //...
        ]);

        if($validator->fails()) {
            redirect(route('admin.metiers.index'))->withErrors($validator);
        }

        Job::create($request->all());

        return redirect(route('admin.metiers.index'));
    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int $id
//     * @return Response
//     */
//    public function show($id)
//    {
//        $post = Post::find($id);
//        return view('admin.posts.show', compact('post'));
//    }
//
//    /**
//     * Permet de voir la page d'édition
//     *
//     * @param  int $id
//     * @return Response
//     */
    public function edit($id)
    {
        $jobs = Job::lists('name', 'id');
        $fiches = Job::findOrFail($id);

        return view('admin.posts.create', compact('jobs', 'fiches'));
    }

    /**
     * Permet de mettre à jour
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $fiche = Job::findOrFail($id);

        $fiche->save();
        $fiche->update($request->all());

        return redirect(route('admin.posts.index'));
    }

//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int $id
//     * @return Response
//     */
//    public function destroy($id)
//    {
//        $post = Post::find($id);
//        $post->delete();
//
//        return redirect(route('admin.posts.index'));
//    }
}