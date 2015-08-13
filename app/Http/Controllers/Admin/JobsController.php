<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller as Controller;
use App\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $fiches = Job::all();

        return view('admin.jobs.index', compact('fiches'));
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
     * Permet de voir la page d'édition
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $fiches = Job::findOrFail($id);

        return view('admin.jobs.create', compact('jobs', 'fiches'));
    }

    /**
     * Permet de mettre à jour
     *
     * @return Response
     */
    public function update(Request $request)
    {
        $id = $request->job_id;

        $resume = $request->resume;
        $content = $request->content;
        $fiches = Job::where('id', $id)->update(['resume' => $resume, 'content' => $content]);


        return redirect(route('admin.metiers.index'));
    }
}