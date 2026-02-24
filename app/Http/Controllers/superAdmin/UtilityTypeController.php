<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\UtilityType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UtilityTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check ()){

            $utilitytypes = UtilityType::latest()->get();
            return view('superAdmin.utilitytypes.index' , compact('utilitytypes'));
        }
        return redirect("login")->withErrors('You are not allowed to access');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.utilitytypes.create');
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

        $utilitytype = UtilityType::create([
            'path' => $imageUrl,
            'slug' => $slugWithHyphens,
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),
            'title' => $request->input('title'),
           'meta_keyword' => $request->input('meta_keyword'),
            'meta_description' => $request->input('meta_description'),
            'image' => $imageUrl,
        ]);

        return redirect()->route('utilitytypes.index')->with('success', 'Service Category Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(UtilityType $utilitytype)
    {
        if (Auth::check()) {
            return view('superAdmin.utilitytypes.show', compact('utilitytype'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UtilityType $utilitytype)
    {
        if (Auth::check()) {
            return view('superAdmin.utilitytypes.edit', compact('utilitytype'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Utilitytype $utilitytype)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the journaly record
        $utilitytype->name = $request->input('name');
        $utilitytype->detail = $request->input('detail');
        $utilitytype->status = $request->input('status');
        $utilitytype->title = $request->input('title');
        $utilitytype->meta_keyword = $request->input('meta_keyword');
        $utilitytype->meta_description = $request->input('meta_description');
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($utilitytype->path) {
                Storage::delete('public/images/' . $utilitytype->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $utilitytype->path = $imageUrl;
        }

        $utilitytype->save();

        // Redirect and send message
        return redirect()->route('utilitytypes.index')->with('success', 'Service Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UtilityType $utilitytype)
   {
        $utilitytype->delete();
        return redirect()->route('utilitytypes.index')->with('success', 'Service Category Deleted Sucessfully');
    }
}
