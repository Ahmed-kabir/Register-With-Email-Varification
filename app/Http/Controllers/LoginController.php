<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        $data['title'] = 'Login';
        return view('login', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        $data['title'] = 'Register';
        return view('register', $data);
    }

    public function savePasswordForSession(Request $request)
    {
        $password = $request->input('password');
        // $session_data = session()->put('password', $password);
        $session_data = Session::put('password', $password);
        // echo $session_data;
        // if(empty($session_data))
        // if($password)

        // {
        //  echo 'done';   
        // }   
        // else
        // {
        //     echo 'failed';
        // }     
        
    }

    public function checkRepetedPassword(Request $request)
    {
        $confirm_password = $request->input('confirm_password');
        $prev_pass = Session::get('password');
        if($prev_pass == $confirm_password)
        {
            echo 'done';
        }
        else
        {
            echo 'failed';
        }
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
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
