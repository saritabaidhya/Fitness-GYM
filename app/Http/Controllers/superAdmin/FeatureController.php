<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $features = Feature::latest()->get();
            return view('superAdmin.features.index',compact('features'));
        }
       return redirect("login")->withErrors('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.features.create');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add any additional validation rules as needed
        ]);


        $imageUrl = null; // Default value if no image is uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
        }


        

        $feature= Feature::create([
            'path' => $imageUrl,
            'name' => $request->input('name'),
            'icon' => $request->input('icon'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('features.index')->with('success', 'Feature Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        if (Auth::check()) {
            return view('superAdmin.features.show', compact('feature'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        if (Auth::check()) {
            return view('superAdmin.features.edit', compact('feature'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feature $feature)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);

        // Update the journaly record
        $feature->name = $request->input('name');
        $feature->icon = $request->input('icon');
        $feature->detail = $request->input('detail');
        $feature->status = $request->input('status');

        
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($feature->path) {
                Storage::delete('public/images/' . $feature->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $feature->path = $imageUrl;
        }

        $feature->save();

        // Redirect and send message
        return redirect()->route('features.index')->with('success', 'Feature updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('features.index')->with('success', 'Feature Deleted Sucessfully');
    }
}
