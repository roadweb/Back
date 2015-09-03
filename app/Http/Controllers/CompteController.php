<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Http\Requests\JustifFormRequest;
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

            $files = \File::files($path);
            $newfile = $path . '/' . $username;

            foreach ($files as $file) 
            {
                $fileWithoutExtension =  substr($file, 0, -4);
                if ($fileWithoutExtension === $newfile) 
                {
                    \File::Delete($fileWithoutExtension . '.png');
                    \File::Delete($fileWithoutExtension . '.gif');
                    \File::Delete($fileWithoutExtension . '.jpg');
                }
            }
            
            $extension = $avatar->getClientOriginalExtension();
            $name = $username . '.' . $extension;
            $avatar->move($path, $name);
            $file = $path . '/' . $name;
            $user->avatar = $file;
            $user->save();
        }

        return \Redirect::route('compte')
        ->with('message-avatar', 'Votre avatar a bien été modifié !');
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

    public function send(JustifFormRequest $request)
    {    
        \Mail::send('emails.justificatif',
        array(
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'justif'=> $request->get('justificatif')
        ), function($message) use ($request)
        {
            $email = $request->email;
            $username = $request->username;
            $justif = $request->file('justificatif');

            if($justif->isValid())
            {
                $path = config('images.inscription');

                $files = \File::files($path);
                $newfile = $path . '/' . $username;

                foreach ($files as $file) 
                {
                    $fileWithoutExtension =  substr($file, 0, -4);
                    if ($fileWithoutExtension === $newfile) 
                    {
                        \File::Delete($fileWithoutExtension . '.png');
                        \File::Delete($fileWithoutExtension . '.pdf');
                        \File::Delete($fileWithoutExtension . '.jpg');
                    }
                }
                    
                $extension = $justif->getClientOriginalExtension();
                $name = $username . '.' . $extension;
                $justif->move($path, $name);
            }
            $file = $path . '/' . $name;

            $message->attach($file);  
            $message->from($request->email);
            $message->to('plateulere@gmail.com', 'Equipe Roadweb')->subject('envoi de justificatif');
            $message->setReplyTo($email);
        });

        return \Redirect::route('compte')
        ->with('message-justif', 'Votre justificatif a bien été envoyé ! Vous serez informé de la validation de vos droits dans les 24 à 48h.');
    }

}

