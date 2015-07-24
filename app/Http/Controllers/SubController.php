<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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
        return view('pages.subscribe.sub');
    }

    public function subvalid()
    {
        return view('pages.subscribe.subvalid');
    }

}
