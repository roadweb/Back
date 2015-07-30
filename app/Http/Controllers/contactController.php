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

    public function getContact()
    {

    }

    public function postContact()
    {

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
        ), function($message)
        {
            $message->from('nen@gmail.com');
            $message->to('peyrot.celine@gmail.com', 'Admin')->subject('objet');
            $message->setReplyTo('n@g.com');
        });



        return \Redirect::route('contact')
      ->with('message', 'Votre mail a bien été envoyé !');
    }
}
