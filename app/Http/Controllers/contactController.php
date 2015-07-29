<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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

    public function store()
    {
        
    }
}
