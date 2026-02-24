<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontEnd\Contact;


class ConnectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $connects = Contact::all();
            return view('superAdmin.connects.index',compact('connects'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $connect)
    {
        if (Auth::check()) {
            return view('superAdmin.connects.show', compact('connect'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $connect)
    {
        if (Auth::check()) {

            return view('superAdmin.connects.edit', compact('connect'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function update(Request $request, Contact $connect)
    {
        //validate
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);


        $connect->update($request->all());

        //redirect& send message
        return redirect()->route('connects.index')->with('success', 'Membership Request Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $connect)
    {
        $connect->delete();
        return redirect()->route('connects.index')->with('success', 'Membership Request Deleted Sucessfully');


    }

}
