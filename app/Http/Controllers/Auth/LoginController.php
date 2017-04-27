<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Socialite;
use Auth;
use App\User;
use Ferus\FairPayApi\FairPay;
use Ferus\FairPayApi\Exception\ApiErrorException;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function redirect(){

        return Socialite::driver('google')->with(['hd'=>'esiee.fr'])->redirect();

    }

    public function callback($provider = 'google'){

        $user = Socialite::driver($provider)->stateless()->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect('/student/');

    }

    public function findOrCreateUser($user, $provider){

        $authUser = User::where('provider_id', $user->id)->first();

        if ($authUser) {
            return $authUser;
        }
        
        // Trying to fetch student from fairpay api
        $fairpay = new FairPay(config('fairpay_key'));
        // Getting name and surname from email.
        $searchString = explode("@",$user->email);
        $searchString = explode(".",$searchString[0]);
        $searchString = $searchString[0] . " " . $searchString[1];
        
        try {
          $fairpay_id = $fairpay->getStudent($searchString)->id;
        }
        catch(ApiErrorException $e){
          $fairpay_id = null; //Student wasn't found
        }
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id,
            'fairpay_id' => $fairpay_id
        ]);

    }
}