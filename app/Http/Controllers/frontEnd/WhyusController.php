<?php

namespace App\Http\Controllers\frontEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Story;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\Feature;
use App\Models\superAdmin\Review;

class WhyusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        {
            $stories = Story::all();
            $utilities = Utility::where('status', 1)->latest()->get();
            $features = Feature::where('status', 1)->latest()->get();
            $reviews = Review::where('status', 1)->latest()->get();
            return view('frontEnd.whyus.index',compact('stories','utilities','features','reviews'));
        }    
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
