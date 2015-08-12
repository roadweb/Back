<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('pages.contact.index');
    }

    public function store(ContactFormRequest $request)
    {    
        \Mail::send('emails.contact',
        array(
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'objet' => $request->get('objet'),
            'bodyMessage' => $request->get('message'),
            'url' => $request->get('url'),
            'file'=> $request->get('file'),
            'copie' => $request->get('copie')
        ), function($message) use ($request)
        {
            /*si l'utilisateur a demandé à recevoir une copie du message par mail :*/
            if ($request->copie === 'yes') {
                $message->to($request->email, $request->firstname)->subject('copie de mon message à roadweb');
            }

            /*si l'utilisateur a envoyé une capture d'écran :*/
            if(file_exists($request->file('file'))) {
                $img = $request->file('file');
                if($img->isValid())
                {
                    $path = config('images.contact');
                    
                    $extension = $img->getClientOriginalExtension();
                    do 
                    {
                        $name = str_random(10) . '.' . $extension;
                    } 
                    while(file_exists($path . '/' . $name));
                    $img->move($path, $name);
                }
                $file = $path . '/' . $name;
                $message->attach($file);  
            }

            $message->from($request->email);
            $message->to('hello@road-web.fr', 'Equipe Roadweb')->subject($request->objet);
            $message->setReplyTo($request->email);
        });
        return \Redirect::route('contact')
        ->with('message', 'Votre email a bien été envoyé ! L\'équipe Roadweb vous répondra dans les plus brefs délais.');
    }
}

/*File::delete($file); + FileControllerhello@road-web.fr
essayer de rajouter une fonction pour supprimer les captures d'écran du dossier après envoi de l'email*/