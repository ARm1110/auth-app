<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequestValidation;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function showLogin()
    {

        return view('users.showLogin');
    }
    public function showRegister()
    {

        return view('users.showRegister');
    }
    public function register(UserRequestValidation $request)
    {
        // dd($request->validated());
        try {
            User::create(
                $request->all()
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function login(Request $request)
    {
        $user =  User::select('*')->where('email', $request->email)
            ->where('password', $request->password)->get();


        if ($user) {
            session()->put('user_id', $user->first()->id);
            return redirect()->back();
        }
    }
}
