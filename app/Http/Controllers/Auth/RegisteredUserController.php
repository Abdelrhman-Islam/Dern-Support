<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $isOrg = request()->org;
        if($isOrg == TRUE){
        $type = 'org';}
        else{
            $type = 'user';
        }
        $name = request()->name;
        $email = request()->email;
        $phoneNum = request()->phoneNumber;
        $pass = request()->password;

        $user = User::create([
            'type' => $type,
            'name' => $name,
            'email' => $email,
            'phoneNumber' => $phoneNum,
            'password' => Hash::make($pass),
        ]);


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::UsersHome);
    }
}
