<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = CountryResource::collection(Country::all());
        return Inertia::render('AdminApp/Country/Index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('AdminApp/Country/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'country'=>['required'],
        ]);
        if ($request){
            Country::create([
                'country'=>$request->country,
            ]);
            return Redirect::route('countries.index');
        }
        return Redirect::back();
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
    public function destroy(Country $country)
    {
        $country->delete();
    }
}
