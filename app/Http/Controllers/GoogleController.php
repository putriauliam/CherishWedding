<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        // try {

        //     $user = Socialite::driver('google')->user();

        //     $finduser = User::where('google_id', $user->id)->first();

        //     if($finduser){

        //         Auth::login($finduser);

        //         return redirect()->intended('beranda');

        //     }else{
        //         $newUser = User::updateOrCreate(['email' => $user->email],[
        //                 'name' => $user->name,
        //                 'google_id'=> $user->id,
        //                 'password' => Hash::make('password')
        //             ]);

        //         Auth::login($newUser);

        //         return redirect()->intended('beranda');
        //     }

        // } catch (Exception $e) {
        //     dd($e->getMessage());
        // }

        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::updateOrCreate([
            'google_id' => $googleUser->id,
        ], [
            'name' => $googleUser->name,
            'username' => $googleUser->name,
            'email' => $googleUser->email,
            'email_verified_at' => now(),
            'password' => Hash::make('12345'),
            'google_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken,
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
