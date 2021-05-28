<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use http\Cookie;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(\Illuminate\Http\Request $request) {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        // This section is the only change
        if ($this->guard()->validate($this->credentials($request))) {
            $user = $this->guard()->getLastAttempted();

            // Make sure the user is active
            if ($user->active && $this->attemptLogin($request)) {
                // Send the normal successful login response
                if($request->hasCookie('innridevice')) {
                }
                else{
                    \Cookie::queue('innridevice', $_SERVER['REMOTE_ADDR'], 2628000);
                    $strUserName = $user->name;
                    $strIPAddress = $_SERVER['REMOTE_ADDR'];
                    $html = "<html><body>
                    <div>
                        <h2>Hi</h2>
                        <p>The following user has access <a href='https://innri.fisherman.is'>https://innri.fisherman.is</a> from a new device!</p><br>
                        <p>Username: $strUserName <br>
                        IP address $strIPAddress</p>
                        </div></body></html>";
                    $to = "elias@fisherman.is";
                    $subject = 'Login from a new device';
                    $formEmail = 'innri@fisherman.is';
                    $formName = "Innri Fisherman";
                    if($_SERVER['SERVER_NAME']!=='127.0.0.1')
                    {
                        Mail::send([], [], function($message) use($html, $to, $subject, $formEmail, $formName){
                            $message->from($formEmail, $formName);
                            $message->to($to);
                            $message->subject($subject);
                            $message->setBody($html, 'text/html' ); // dont miss the '<html></html>' or your spam score will increase !
                        });
                    }

                }
                return $this->sendLoginResponse($request);
            } else {
                // Increment the failed login attempts and redirect back to the
                // login form with an error message.
                $this->incrementLoginAttempts($request);
                return redirect()
                    ->back()
                    ->withInput($request->only($this->username(), 'remember'))
                    ->withErrors(['active' => 'You must be active to login.']);
            }
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
}
