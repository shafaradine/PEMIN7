<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            return redirect('/dashboard')->with('token', $token);
        } else {
            // Handle the case when 'access_token' is missing or undefined
            return redirect()->back()->with('error', 'Email / Password Wrong!');
        }
    }

    public function logout()
    {
        $user = Auth::user();

        if ($user) {
            $response = Http::post('https://pemin.aenzt.tech/api/v1/auth/logout', [
                'user_id' => $user->id,
            ]);

            // Process API response as needed
            $apiResponse = $response->json();

            if ($apiResponse['success']) {
                // Logout the user in your Laravel application
                Auth::logout();
                return redirect('/login');
            } else {
                // Handle API error
                return back()->with('error', 'Error logging out from the API');
            }
        }

        return redirect('/login');
    }
}
