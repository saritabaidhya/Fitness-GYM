<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontEnd\Membership;


class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $enquiries = Membership::all();
            return view('superAdmin.enquiries.index',compact('enquiries'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    /**
     * Display the specified resource.
     */
    public function show(Membership $enquiry)
    {
        if (Auth::check()) {
            return view('superAdmin.enquiries.show', compact('enquiry'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Membership $enquiry)
    {
        if (Auth::check()) {

            return view('superAdmin.enquiries.edit', compact('enquiry'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function update(Request $request, Membership $enquiry)
    {
        //validate
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);


        $enquiry->update($request->all());

        //redirect& send message
        return redirect()->route('enquiries.index')->with('success', 'Membership Request Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Membership $enquiry)
    {
        $enquiry->delete();
        return redirect()->route('enquiries.index')->with('success', 'Membership Request Deleted Sucessfully');


    }


}
