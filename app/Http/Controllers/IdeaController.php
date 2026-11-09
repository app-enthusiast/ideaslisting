<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get the search input from the request
        $search = $request->input('search'); 
        // Filter ideas if a search query exists, otherwise grab the latest
         $ideas = Idea::when($search, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
        })
        ->latest()
        ->get(); 
        // Pass the ideas and the search term back to your view
        return view('ideas.index', [
        'ideas' => $ideas,
        'search' => $search
        ]); 
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
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Idea::create($validated);
        return redirect()->route('ideas.index')->with('success','Idea created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        //
        return view("ideas.edit", compact("idea"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idea $idea)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $idea->update($validated);
        return redirect()->route('ideas.index')->with('success','Idea updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea)
    {
        //
        $idea->delete();
        return redirect()->route('ideas.index')->with('success','Idea deleted successfully.');
    }
}
