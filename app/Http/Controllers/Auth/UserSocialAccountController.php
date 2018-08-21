<?php

namespace myRoommie\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use myRoommie\Http\Controllers\Controller;
use myRoommie\User;
use myRoommie\UserSocialAccount;
use Laravel\Socialite\Facades\Socialite;
use myRoommie\Repository\Helper;

class UserSocialAccountController extends Controller
{
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
            return redirect(route('login'));
        }

       $authUser = $this->findOrCreateUser($user, $provider);

        Auth::login($authUser, true);
        return redirect()->intended(route('student'));
    }

    public function findOrCreateUser($socialUser,$provider)
    {


        $account = UserSocialAccount::where(['provider_name'=>$provider,
            'provider_id'=>$socialUser->getId()])->first();

        if ($account){
            return $account->user;
        }
        else {
            $user = User::where('email', $socialUser->getEmail())->first();


            if (!$user) {
                $user = User::create([
                    'firstName' => $socialUser->getfirstName(),
                    'lastName' => $socialUser->getlastName(),
                    'email' => $socialUser->getEmail(),
                    'sex' => $socialUser->getGender(),
                    'avatar' => $socialUser->getAvatar(),
                    //'phone' => $socialUser->getPhone()
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
