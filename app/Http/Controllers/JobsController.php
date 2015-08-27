<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Job;

class JobsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $jobs = Job::take(6)->get();
        return view('pages.jobs.index', compact('jobs'));
    }

    public function description()
    {
        return view('pages.jobs.job-description');
    }

}
