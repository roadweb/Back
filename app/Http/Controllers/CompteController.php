<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\AvatarFormRequest;

class CompteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(Auth::check()){
            $user = Auth::user();
            return view('pages.compte.index', compact('user', 'rsx'));
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $users = Auth::user()->id;


        return view('compte.create', compact('users', 'rsx'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        User::create($request->all());

        return redirect(route('compte'));
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
        $user = User::find($id);
        $auth_id = Auth::user()->id;

        return view('compte.create', compact('auth_id', 'user', 'rsx'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect(route('compte'));
    }

    public function avatar(AvatarFormRequest $request)
    {
        $id = $request->id;
        $avatar = $request->file('avatar');
        $user = User::findOrFail($id);
        $username = $user->username;
        
        if($avatar->isValid())
        {
            $path = config('images.avatar');      
            $extension = $avatar->getClientOriginalExtension();
            $name = $username . '.' . $extension;
            $avatar->move($path, $name);
            $file = $path . '/' . $name;
            $user->avatar = $file;
            $user->save();
        }
        return \Redirect::route('compte')
        ->with('message', 'Votre avatar a bien été modifié !');
    
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

