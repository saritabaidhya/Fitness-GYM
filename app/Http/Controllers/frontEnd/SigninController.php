<?php

namespace App\Http\Controllers\frontEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Slider;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class SigninController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        {
            return view('frontEnd.signins.index');
        }    
    }

    public function customsignin(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('signup')->attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/'); // Redirect to the intended URL or default
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors(['email' => 'Login details are not valid']);
    }

    public function signOut()
    {
        Session::flush();
        Auth::guard('signup')->logout(); // Use 'signup' guard for logout

        return redirect('/');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
