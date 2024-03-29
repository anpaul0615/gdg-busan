<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function execute(Request $request, $provider)
    {
        if (! $request->has('code')) {
            return $this->redirectToProvider($provider);
        }
        return $this->handleProviderCallback($provider);
    }

    protected function redirectToProvider($provider)
    {
        return \Socialite::driver($provider)->redirect();
    }

    protected function handleProviderCallback($provider)
    {
        $user = \Socialite::driver($provider)->user();
        // dd($user);
        $user = (\App\User::whereEmail($user->getEmail())->first())
            ?: \App\User::create([
                'name'  => $user->getName() ?: 'unknown',
                'email' => $user->getEmail(),
                'activated' => 1,
            ]);
        auth()->login($user);
        flash( Auth()->user()->name . ' 님 안녕하세요!' );
        return redirect('home');

    }
}
