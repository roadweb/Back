<?php namespace App\Http\Controllers;

use App\Http\Requests;

class SubController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function sub()
    {
        return view('pages.subscribe.sub');
    }

    public function subvalid()
    {
        return view('pages.subscribe.subvalid');
    }

}
