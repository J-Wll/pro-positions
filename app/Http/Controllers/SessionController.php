<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("auth.login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        $validatedAttributes = request()->validate([
            "email" =>      ["required", "email"],
            "password" =>   ["required"]
        ]);

        // try to login
        if (! Auth::attempt($validatedAttributes)) {
            throw ValidationException::withMessages([
                "email" => "Credentials do not match"
            ]);
        };

        // if succeed regenerate session token
        // protects against session hijacking by making old security tokens invalid
        request()->session()->regenerate();

        // redirect
        return redirect("/");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect("/");
    }
}
