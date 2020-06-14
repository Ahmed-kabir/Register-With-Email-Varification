<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;
use Session;
use Mail;
use App\Mail\SignupEmail;
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
    public function saveUserInfo(Request $request)
    {
        // return $request->all();
        $random_value = (mt_rand(10,10000));
        $data['fname'] = $request->input('fname');
        $data['lname'] = $request->input('lname');
        $data['email'] = $request->input('email');
        $data['password'] = $request->input('password');
        $data['confirm_password'] = $request->input('confirm_password');

    }

    public function basic_email() {
        $data = [
            'name' => "kabir",
            'code' => "1234"
        ];

        Mail::to('kabir14235@gmail.com')->send(new SignupEmail($data));
      // $data = array('name'=>"Virat Gandhi");
   
      // Mail::send(['text'=>'email_body'], $data, function($message) {
      //    $message->to('kabir14235@gmail.com', 'Tutorials Point')->subject
      //       ('Laravel Basic Testing Mail');
      //    $message->from('kbrahmd94@gmail.com','Virat Gandhi');
      // });
      echo "Basic Email Sent. Check your inbox.";
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
