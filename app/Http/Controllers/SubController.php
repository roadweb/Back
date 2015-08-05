<?php namespace App\Http\Controllers;

use App\Http\Requests;
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
        $jobs = Job::lists('name', 'id');

        return view('pages.subscribe.sub', compact('jobs'));
    }

    public function subvalid()
    {
        if(Auth::check()) {
            $user = Auth::user();
            return view('pages.subscribe.subvalid', compact('user'));
        }

        return redirect('/inscription');
    }

}
