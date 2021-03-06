<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\JustifFormRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Job;
use App\User;
use Illuminate\Support\Facades\Auth;

class SubController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function sub()
    {
        $this->middleware('auth');
        $jobs = Job::take(6)->get();

        return view('pages.subscribe.sub', compact('jobs'));
    }

    public function subvalid()
    {
        if(Auth::check()) {
            $user = Auth::user();
            return view('pages.subscribe.subvalid', compact('user'));
        }

        return redirect('/inscription/validation');
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
        ->with('message', 'Votre justificatif a bien été envoyé ! Vous serez informé de la validation de vos droits dans les 24 à 48h.');
    }

}
