<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\superAdmin\Package;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       if(Auth::check()){

        $packages = Package ::latest()->get();
            return view('superAdmin.packages.index' , compact('packages'));
        }
        return redirect("login")->withErrors('You are not allowed to access');

       }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create(Package $package)
    {
        if (Auth::check()) {
            $includes=$package->includes;
            $excludes=$package->excludes;
            return view('superAdmin.packages.create',compact('includes','excludes'));
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
            'includes' => 'nullable|array', // Ensure includes are an array
            'includes.*' => 'string|max:255', // Validate each feature'
            'excludes' => 'nullable|array', // Ensure excludes are an array
            'excludes.*' => 'string|max:255', // Validate each feature'
        ]);

       

        $imageUrl = null; // Default value if no image is uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
        }



        $name = $request->input('name');
        $slug = Str::slug($name);
        $slugWithHyphens = str_replace(' ', '-', $slug);

        $packages= Package::create([
            'path' => $imageUrl,
            'slug' => $slugWithHyphens,
            'name' => $request->input('name'),
            'amount' => $request->input('amount'),
            'includes' => $request->input('include', []),
            'excludes' => $request->input('exclude', [])
           
        ]);

        return redirect()->route('packages.index')->with('success', 'package Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        if (Auth::check()) {
            return view('superAdmin.packages.show', compact('package'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        if (Auth::check()) {
            $includes=$package->includes;
            $excludes=$package->excludes;
            return view('superAdmin.packages.edit', compact('package','includes','excludes'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'includes' => 'nullable|array', // Ensure includes are an array
            'includes.*' => 'string|max:255', // Validate each feature'
            'excludes' => 'nullable|array', // Ensure excludes are an array
            'excludes.*' => 'string|max:255', // Validate each feature'
        ]);

        // Update the journaly record
        $package->name = $request->input('name');
        $package->amount = $request->input('amount');
        $package->status = $request->input('status');
        $package->includes = $request->input('include', []);
        $package->excludes = $request->input('exclude', []);
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($package->path) {
                Storage::delete('public/images/' . $package->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $package->path = $imageUrl;
        }
     

        $package->save();

        // Redirect and send message
        return redirect()->route('packages.index')->with('success', 'package updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'package Deleted Sucessfully');
    }
}
