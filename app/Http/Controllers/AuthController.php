<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showRegisterForm() {
        return view('register');
    }

    public function register(Request $request) {

        Http::withoutVerifying()->post('https://pemin.aenzt.tech/api/v1/auth/register',[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'division'=>$request->division,
            'address'=>$request->address,
            'birthDate'=>$request->birthDate,
            'phoneNumber'=>$request->phoneNumber,
            'sex'=>$request->sex,
        ]);        
        
        return redirect()->route('login');
    }
    
    public function showLoginForm()
    {
        return view('login');
    }
    
    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        
        $requestData = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $response = Http::withoutVerifying()->post('https://pemin.aenzt.tech/api/v1/auth/login', $requestData);


        $apiResponse = $response->json();

        if (isset($apiResponse['data']['access_token'])) {
            $token = $apiResponse['data']['access_token'];

            Session::put('bearer', $token);
            Session::put('id', $apiResponse['data']['id']);
            return redirect()->route('mails.create');
        } else {
           
            return redirect()->back()->with('error', 'Email / Password Wrong!');
        }
    }

    public function logout()
    {
        Session::flush();

        return redirect()->route('login');
    }
}