<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Prepare data for the API request
        $requestData = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $response = Http::withoutVerifying()->post('https://pemin.aenzt.tech/api/v1/auth/login', $requestData);


        $apiResponse = $response->json();

        if (isset($apiResponse['data']['access_token'])) {
            $token = $apiResponse['data']['access_token'];

            // Redirect the user or perform actions with the token
            return view('/mail/index')->with('token', $token);
        } else {
            // Handle the case when 'access_token' is missing or undefined
            return redirect()->back()->with('error', 'Access token not found in the response.');
        }
    }
    public function logout()
    {
        // Hapus token atau sesi pengguna
        AuthController::logout();

        // Redirect ke halaman login
        return redirect('/login');
    }
}
