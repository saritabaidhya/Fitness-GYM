<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\UtilityType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class UtilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check ()){
            
             $utilitytypes = UtilityType::where('status', 1)->latest()->get();

            $utilities = Utility::latest()->get();
            return view('superAdmin.utilities.index' , compact('utilities','utilitytypes'));
        }
        return redirect("login")->withErrors('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            $utilitytypes = UtilityType::where('status', 1)->latest()->get();
            return view('superAdmin.utilities.create',compact('utilitytypes'));
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
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add any additional validation rules as needed
        ]);


        $imageUrl = null; // Default value if no image is uploaded
        $imageUrl1 = null; // Default value if no image is uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
        }
        if ($request->hasFile('image1')) {
            $imagePath1 = $request->file('image')->store('public/images');
            $imageUrl1 = basename($imagePath1);
        }

        
        $name = $request->input('name');
        $slug = Str::slug($name);
        $slugWithHyphens = str_replace(' ', '-', $slug);

        $utility= Utility::create([
            'path' => $imageUrl,
            'path1' => $imageUrl1,
            'slug' => $slugWithHyphens,
            'name' => $request->input('name'),
            'icon' => $request->input('icon'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
            'category' => $request->input('category'),
            'title' => $request->input('title'),
            'highlights' => $request->input('highlights'),
            'meta_keyword' => $request->input('meta_keyword'),
            'meta_description' => $request->input('meta_description'),
            'image' => $imageUrl,
        ]);

        return redirect()->route('utilities.index')->with('success', 'Service Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Utility $utility)
    {
        if (Auth::check()) {
            return view('superAdmin.utilities.show', compact('utility'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Utility $utility)
    {
        if (Auth::check()) {
            $utilitytypes = UtilityType::where('status', 1)->latest()->get();
            return view('superAdmin.utilities.edit', compact('utility','utilitytypes'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Utility $utility)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the journaly record
        $utility->name = $request->input('name');
        $utility->icon = $request->input('icon');
        $utility->detail = $request->input('detail');
        $utility->status = $request->input('status');
        $utility->category = $request->input('category');
        $utility->title = $request->input('title');
        $utility->highlights = $request->input('highlights');
        $utility->meta_keyword = $request->input('meta_keyword');
        $utility->meta_description = $request->input('meta_description');
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($utility->path) {
                Storage::delete('public/images/' . $utility->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $utility->path = $imageUrl;
        }
        if ($request->hasFile('image1')) {
            // Delete the previous image if it exists
            if ($utility->path1) {
                Storage::delete('public/images/' . $utility->path1);
            }

            $imagePath1 = $request->file('image1')->store('public/images');
            $imageUrl1 = basename($imagePath1);
            $utility->path1 = $imageUrl1;
        }

        $utility->save();

        // Redirect and send message
        return redirect()->route('utilities.index')->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Utility $utility)
    {
        $utility->delete();
        return redirect()->route('utilities.index')->with('success', 'Service Deleted Sucessfully');
    }
}
