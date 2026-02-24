<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\superAdmin\Squad;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SquadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       if(Auth::check()){

        $squads = Squad ::latest()->get();
            return view('superAdmin.squads.index' , compact('squads'));
        }
        return redirect("login")->withErrors('You are not allowed to access');

       }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.squads.create');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add any additional validation rules as needed
        ]);

        $imagePath = $request->file('image')->store('public/images');
        $imageUrl = basename($imagePath);

        $name = $request->input('name');
    $slug = Str::slug($name);
    $slugWithHyphens = str_replace(' ', '-', $slug);

        $squads= Squad::create([
            'path' => $imageUrl,
            'slug' => $slugWithHyphens,
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
            'facebook' => $request->input('facebook'),
            'email' => $request->input('email'),
           
        ]);

        return redirect()->route('squads.index')->with('success', 'Team Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Squad $squad)
    {
        if (Auth::check()) {
            return view('superAdmin.squads.show', compact('squad'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Squad $squad)
    {
        if (Auth::check()) {
            return view('superAdmin.squads.edit', compact('squad'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Squad $squad)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the journaly record
        $squad->name = $request->input('name');
        $squad->detail = $request->input('detail');
        $squad->status = $request->input('status');
        $squad->email = $request->input('email');
        $squad->facebook = $request->input('facebook');
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($squad->path) {
                Storage::delete('public/images/' . $squad->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $squad->path = $imageUrl;
        }

        $squad->save();

        // Redirect and send message
        return redirect()->route('squads.index')->with('success', 'Team updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Squad $squad)
    {
        $squad->delete();
        return redirect()->route('squads.index')->with('success', 'Team Deleted Sucessfully');
    }
}
