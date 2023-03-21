<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ScholarshipResource;
use App\Models\Country;
use App\Models\Field;
use App\Models\Major;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scholarships = ScholarshipResource::collection(Scholarship::all());
        return Inertia::render('AdminApp/Scholarship/Index', compact('scholarships'));
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
        $request->validate([
        'title'=>['required', 'min:2'],
        'image'=>['image'],
        'major_id'=>['required'],
        'field_id'=>['required'],
        'country_id'=>['required'],
        'start_date'=>['required'],
        'end_date'=>['required'],
        'description'=>['required'],
        'source_url'=>['required'],
        'video_url'=>['required'],
    ]);
        if ($request->hasFile('image')){
            $image = $request->file('image')->store('images');
            Scholarship::create([
                'title'=>$request->title,
                'image'=>$image,
                'major_id'=>$request->major_id,
                'field_id'=>$request->field_id,
                'country_id'=>$request->country_id,
                'start_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                'description'=>$request->description,
                'source_url'=>$request->source_url,
                'video_url'=>$request->video_url,
            ]);
            return Redirect::route('scholarships.index');
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
    public function destroy(Scholarship $scholarship)
    {
        Storage::delete($scholarship->image);
        $scholarship->delete();
        return Redirect::back();
    }
}
