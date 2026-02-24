<?php

namespace App\Http\Controllers\frontEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Slider;
use App\Models\superAdmin\Feature;
use App\Models\superAdmin\Story;
use App\Models\superAdmin\Media;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\Squad;
use App\Models\superAdmin\Review;
use App\Models\superAdmin\Package;
use App\Models\superAdmin\Subscribe;
use App\Models\superAdmin\Studio;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        {
            $sliders = Slider::all();
            $features = Feature::where('status', 1)->orderBy('id', 'desc')->get();
            $utilities = Utility::where('status', 1)->latest()->get();
            $medias = Media::orderBy('id', 'desc')->get();
            $stories = Story::all();
            $squads = Squad::where('status', 1)->latest()->get();
            $reviews = Review::where('status',  1)->latest()->get();
            $packages = Package::where('status',  1)->latest()->get();

            $studios= Studio::latest()->get();


            // $associates = Associate::where('status', 1)->latest()->get();
            return view('frontEnd.home.index', compact('sliders','features','stories','utilities','medias','squads','reviews','packages','studios'));
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
    public function storeSubscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
           
        ]);
        // dd($request->input('email'));

        Subscribe::create([
            'email' => $request->input('email'),
        ]);
        return redirect()->route('home.index')->with('success', 'Requested Sucessfully');

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
