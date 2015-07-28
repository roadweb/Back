<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Job;
use App\User;

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
        $jobs = Job::lists('name', 'id');

        return view('pages.subscribe.sub', compact('jobs'));
    }

    public function subvalid()
    {
        return view('pages.subscribe.subvalid');
    }

}
