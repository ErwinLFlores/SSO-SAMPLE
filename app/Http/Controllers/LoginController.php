<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    //

    public function microsoft()
    {
        // send the users request to microsoft
        return Socialite::driver('microsoft')->redirect();
    }

    public function microsoftcallback()
    {
        // send oauth request back from microsoft to authenticate user
        $user = Socialite::driver('microsoft')->user();

        dd($user);
    }

    public function google()
    {
        // send the users request to google
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback()
    {
        // send oauth request back from google to authenticate user
        $user = Socialite::driver('google')->user();

        dd($user);
    }
}
