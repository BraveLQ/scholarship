<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessStoryResource;
use App\Models\SuccessStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SuccessStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $successStories = SuccessStoryResource::collection(SuccessStory::all());
        return Inertia::render('AdminApp/SuccessStory/Index', compact('successStories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('AdminApp/SuccessStory/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'person_name'=>['required', 'min:2'],
            'image'=>['required', 'image'],
            'story'=>['required', 'min:3'],
        ]);
        if ($request->hasFile('image')){
            $image = $request->file('image')->store('images');
            SuccessStory::create([
                'person_name'=>$request->person_name,
                'image'=>$image,
                'story'=>$request->story,
            ]);
            return Redirect::route('success-stories.index');
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
    public function destroy(SuccessStory $successStory)
    {
        Storage::delete($successStory->image);
        $successStory->delete();
        return Redirect::back();

    }
}
