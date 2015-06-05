<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Question;
use App\State;
use Illuminate\Http\Request;

class QuestionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
        if ($request->has('filter_by')) {
            $questions = Question::with('state')
                ->where($request->get('filter_by') . '_id', $request->get('id'))
                ->get();
        } else {
            $questions = Question::orderBy('likes', 'desc')->with('state')->get();
        }

        $states = State::lists('name', 'id');
		return view('questions.index', compact('questions', 'states'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
        $question = Question::findOrFail($id);
        $question->state_id = $request->get('state_id');
        $question->save();

        return redirect(route('questions.index'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
