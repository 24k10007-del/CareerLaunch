<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->user();

        $user = User::updateOrCreate(
            ['provider' => $provider, 'provider_id' => $socialUser->getId()],
            [
                'email' => $socialUser->getEmail() ?: Str::slug($socialUser->getName()).'@example.com',
                'name' => $socialUser->getName() ?: $socialUser->getNickname(),
                'avatar' => $socialUser->getAvatar(),
                'password' => bcrypt(Str::random(16))
            ]
        );

        Auth::login($user, true);
        return redirect()->route('dashboard');
    }
}