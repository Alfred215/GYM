<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Sesion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $rules = [
            'name' => 'required',
            'dni' => 'required|max:9|min:9',
            'email' => 'required',
            'password' => 'required|min:8',
        ];

        $request->validate($rules);

        $users = User::create([
        'name' => $request['name'],
        'dni' => $request['dni'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
        'weight' => $request['weight'],
        'height' => $request['height'],
        'birthday' => $request['birthday'],
        'sex' => $request['sex'],
        'role_id' =>1]);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $sesion_user = User::where('id', 'LIKE', $user->id)->with('sesions')->get();
        // dd($sesion_user);
        //dd($user);
        // dd($user->sesions());
        return view('users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {   
        $rules = [
            'name' => 'required',
            'dni' => 'required|max:9|min:9',
            'email' => 'required',
            'password' => 'required|min:8',
        ];

        $request->validate($rules);
        
        $user->fill($request->all());
        $user->save();
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
