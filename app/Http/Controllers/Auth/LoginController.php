<?php

namespace lucaLabs\Http\Controllers\Auth;

use lucaLabs\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;

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
  protected $redirectTo = '/home';

  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  public function redirectToProviderFacebook()
  {
    return Socialite::driver('facebook')->redirect();
  }

  public function handleProviderFacebookCallback()
  {
    // Metodo richiamato dopo che si è eseguito il redirect
    $user = Socialite::driver('facebook')->user();
    dd($user);
    return redirect()->to('/'); // Redirect to a secure page
  }
}
