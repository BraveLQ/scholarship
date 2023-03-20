<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Field;
use App\Models\Major;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('AdminApp/Scholarship/Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors = Major::all();
        $countries = Country::all();
        $fields = Field::all();
        return Inertia::render('AdminApp/Scholarship/Create', compact('majors','countries', 'fields'));
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
