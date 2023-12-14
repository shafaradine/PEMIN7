<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $id = Session::get('id');
        $profile = Http::withoutVerifying()->withToken(Session::get('bearer'))->get("https://pemin.aenzt.tech/api/v1/employee/$id")->json();
        return view('profile', [
            'profile'=>$profile['data']
        ]);
    }
}
