<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\frontEnd\Signup;
use Laravel\Socialite\Contracts\Provider;
use Laravel\Socialite\Two\User;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        /** @var Provider $provider */
        $provider = Socialite::driver('google');

        /** @var \Laravel\Socialite\Two\User $googleUser */
        $googleUser = Socialite::driver('google')->stateless()->user();


        $user = Signup::firstOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name'       => $googleUser->getName(),
                'google_id'  => $googleUser->getId(),
                'avatar'     => $googleUser->getAvatar(),
            ]
        );

        Auth::login($user);

        return redirect()->intended('/');
    }
}
