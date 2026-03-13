<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function redirectDiscord()
    {
        return Socialite::driver('discord')->redirect();
    }

    public function handleDiscord()
    {
        $user = Socialite::driver('discord')->user();

        return response()->json($user);
    }

    public function redirectTwitch()
    {
        return Socialite::driver('twitch')->redirect();
    }

    public function handleTwitch()
    {
        $user = Socialite::driver('twitch')->user();

        return response()->json($user);
    }
}