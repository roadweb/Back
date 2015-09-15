<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard $auth
     * @param  \Illuminate\Contracts\Auth\Registrar $registrar
     * @return void
     */
    public function __construct(Guard $auth, Registrar $registrar)
    {
        $this->auth = $auth;
        $this->registrar = $registrar;
        $this->loginPath = '/admin/auth/login';
        $this->redirectPath = '/';
        $this->redirectTo = '/';
        $this->loginPath = '/admin/auth/login';

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "last_name"             => "required",
            "first_name"            => "required",
            "username"              => "required",
            "email"                 => "required",
            "password"              => "required",
            "password_confirmation" => "required",
            "emweb",
            "job_id"                => "required"
        ]);

        if ($validator->fails()) {
            return redirect('/inscription')->withErrors($validator);
        }

        $emweb = $request->get('emweb');
        if ($emweb === 'on') {
            $m_emweb = 'Ce membre a indiqué faire partie de l\'Emweb.';
        }
        else {
            $m_emweb = '';
        }

//        \Mail::send('emails.inscription',
//        array(
//            'last_name' => $request->get('last_name'),
//            'first_name' => $request->get('first_name'),
//            'username' => $request->get('username'),
//            'emweb' => $m_emweb
//        ), function($message) use ($request)
//        {
//            $message->from('hello@road-web.fr');
//            $message->to('plateulere@gmail.com', 'Equipe Roadweb')->subject('nouvelle inscription');
//        });

        $this->auth->login($this->registrar->create($request->all()));

        return redirect('/inscription/validation');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/')->withErrors($validator);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect('/');
        }

        return redirect('/')
            ->withErrors([
                'email' => $this->getFailedLoginMessage(),
            ]);
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        $this->auth->logout();

        return redirect('/');
    }
}
