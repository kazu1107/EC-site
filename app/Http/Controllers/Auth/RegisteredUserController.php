<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Mail\NewUserIntroduction;
use Illuminate\Contracts\Mail\Mailer;
use App\Rules\Post_CodeRule;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, Mailer $mailer)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'post_code' => ['required', 'digits:7' /* new Post_CodeRule() */],
            'adress' => ['required', 'string', 'max:200'],
            'tell' => ['required', 'string', 'max:11'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'adress' => $request->adress,
            'tell' => $request->tell,
            'post_code' => $request->post_code,
        ]);

        event(new Registered($user));

        Auth::login($user);

        $mailer->to('user@sample.com')
            ->send(new NewUserIntroduction());

        return redirect(RouteServiceProvider::HOME);
    }
}
