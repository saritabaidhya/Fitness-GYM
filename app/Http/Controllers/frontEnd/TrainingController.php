<?php

namespace App\Http\Controllers\frontEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Utility;
use App\Models\superAdmin\Squad;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        {
            $utilities = Utility::where('status', 1)->latest()->get();
            return view('frontEnd.training.index',compact('utilities'));
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
    public function show($slug)
    {
        //
        $utilities = Utility::where('status', 1)->latest()->get();
        $utilitydetails = Utility::where('slug', $slug)->firstOrFail();

        $squads = Squad::where('status', 1)->latest()->get();
        return view('frontEnd.training.show', compact('utilities','utilitydetails','squads'));

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
