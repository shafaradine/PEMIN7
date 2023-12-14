<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function incoming()
    {
        $response = Http::withoutVerifying()->withToken(Session::get('bearer'))->get('https://pemin.aenzt.tech/api/v1/legal/letter', [
            'type'=>'masuk'
        ]);

        if ($response->getStatusCode() == 401) {
            return redirect()->route('login');
        }

        $mails = $response->json();

        return view('mail.index', [
            'mails'=>$mails['data'],
        ]);
    }

    public function outgoing()
    {
        $response = Http::withoutVerifying()->withToken(Session::get('bearer'))->get('https://pemin.aenzt.tech/api/v1/legal/letter', [
            'type'=>'keluar'
        ]);

        if ($response->getStatusCode() == 401) {
            return redirect()->route('login');
        }

        $mails = $response->json();

        return view('mail.index', [
            'mails'=>$mails['data'],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = Http::withoutVerifying()->withToken(Session::get('bearer'))->post('https://pemin.aenzt.tech/api/v1/legal/letter', [
            'address' => $request->address,
            'city' => $request->city,
            'companyName' => $request->companyName,
            'detail' => $request->detail,
            'endedAt' => $request->endedAt,
            'startedAt' => $request->startedAt,
            'status' => $request->status,
            'type' => $request->type,
        ]);

        if ($response->getStatusCode() == 401) {
            return redirect()->route('login');
        }

        $route = $request->type == 'masuk'?'incoming':'outgoing';
        
        return redirect()->route("mails.$route");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response = Http::withoutVerifying()->withToken(Session::get('bearer'))->get("https://pemin.aenzt.tech/api/v1/legal/letter/$id");

        if ($response->getStatusCode() == 401) {
            return redirect()->route('login');
        }
        
        $mail = $response->json();
        return view('mail.edit', [
            'mail'=>$mail['data']
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $response = Http::withoutVerifying()->withToken(Session::get('bearer'))->put("https://pemin.aenzt.tech/api/v1/legal/letter/$id", [
            'status' => $request->status,
        ]);

        if ($response->getStatusCode() == 401) {
            return redirect()->route('login');
        }
        
        return redirect()->route('mail.incoming');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     $response = Http::withoutVerifying()->withToken(Session::get('bearer'))->delete("https://pemin.aenzt.tech/api/v1/legal/letter/$id");
        
    //     if ($response->getStatusCode() == 401) {
    //         return redirect()->route('login');
    //     }

    //     return redirect()->route('mails.index');
    // }
}
