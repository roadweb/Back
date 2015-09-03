<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Right;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\GestionFormRequest;

class GestionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$groupes = Right::all();
		return view('admin.gestion.index', compact('groupes'));
	}

	public function groupe($id)
	{
		$groupe = Right::findOrFail($id);
		$users = User::where('right_id', $groupe->id)->get();
		return view('admin.gestion.groupe', compact('groupe', 'users'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
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
		return redirect(route('groupe'));
	}

	public function addUser(GestionFormRequest $request)
	{
		$username = $request->username;
		$id = $request->groupe_id;
		$affectedRows = User::where('username', $username)->update(['right_id' => $id]);
		//if ($affectedRows > 0) {
		//	return 'l\'utilisateur existe bien';
		//}
		//else {
		//	return 'l\'utilisateur n\'existe pas';
		//}
		 
        return redirect(route('admin.gestion.index'));
    } 

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function removeUser($id)
	{
		//
	}

}
