<?php

namespace myRoommie\Http\Controllers\Hosteller;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use myRoommie\Hosteller;
use Illuminate\Support\Facades\Auth;
use myRoommie\HostellerSocialAccount;
use myRoommie\Http\Controllers\Controller;

class HostellerSocialAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:hosteller')->except('logout','destroy');
    }


    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    /*
     * Handle provider callback response
     *
     * @param $provider
     *
     * @method Auth::login
     * */
    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
        }catch (\Exception $e){
            return redirect(route('hosteller.login'));
        }

        $authUser = $this->findOrCreateUser($user, $provider);

        Auth::guard('hosteller')->login($authUser, true);
        return redirect()->intended(route('dashboard.hostel'));
    }

    public function findOrCreateUser($socialUser,$provider)
    {


        $account = HostellerSocialAccount::where(['provider_name'=>$provider,
            'provider_id'=>$socialUser->getId()])->first();

        if ($account){
            return $account->user;
        }
        else {
            $user = Hosteller::where('email', $socialUser->getEmail())->first();


            if (!$user) {
                $user = Hosteller::create([
                    'firstName' => $socialUser->getName(),
                    'lastName' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'avatar' => $socialUser->getAvatar(),
                    'role'  => 'owner'
                ]);
            }

            $user->accounts()->create([
                'provider_name' => $provider,
                'provider_id' => $socialUser->getId(),
            ]);

            return $user;
        }
    }
}

