<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\FAQResource;
use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class FaQController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = FAQResource::collection(FAQ::all());
        return Inertia::render('AdminApp/FAQ/Index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('AdminApp/FAQ/Create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question'=>['required', 'min:2'],
            'answer'=>['required', 'min:2'],
        ]);
        if ($request){
            FAQ::create([
                'question'=>$request->question,
                'answer'=>$request->answer,
            ]);
            return Redirect::route('faqs.index');
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
    public function destroy(FAQ $faq)
    {
        $faq->delete();
        return Redirect::back();
    }
}
