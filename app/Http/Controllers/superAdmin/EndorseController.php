<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Subscribe;


class EndorseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $endorses=Subscribe::latest()->get();
            return view('superAdmin.endorses.index',compact('endorses'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscribe $endorse)
    {
        if (Auth::check()) {
            return view('superAdmin.endorses.show', compact('endorse'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscribe $endorse)
    {
        if (Auth::check()) {

            return view('superAdmin.endorses.edit', compact('endorse'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function update(Request $request, Subscribe $endorse)
    {
        //validate
        $request->validate([
            'name' => 'nullable',
            'detail' => 'nullable',
        ]);


        $endorse->update($request->all());

        //redirect& send message
        return redirect()->route('endorses.index')->with('success', 'Membership Request Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscribe $endorse)
    {
        $endorse->delete();
        return redirect()->route('endorses.index')->with('success', 'Membership Request Deleted Sucessfully');


    }



}
