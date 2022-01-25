<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //modificar esto
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'dni' => ['required', 'string', 'max:9'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'weight' => ['required', 'int', 'max:3'],
            'height' => ['required', 'int', 'max:3'],
            'birthday' => ['required', 'int', 'max:20'],
            'sex' => ['required', 'string', 'max:9']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        $users = User::create([
            'name' => $request['name'],
            'dni' => $request['dni'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'weight' => $request['weight'],
            'height' => $request['height'],
            'birthday' => $request['birthday'],
            'sex' => $request['sex'],
            'role_id' => 1]);
            return redirect('/users');
    }
}
