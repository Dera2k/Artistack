<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
use Illuminate\Support\Facades\Storage;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $artworks = Artwork::all();
        return view('pages.artworks')->with('artworks', $artworks);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'image' => 'required|image|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
        ]);

        $path = $request ->file('image')->store("artworks", "public");
        Artwork::create([
            "image_path" => $path,
            "title" => $validated_data['title'],
            "description" => $validated_data['description'],
        ]);
        return redirect()->route('artworks.index')->with('success', 'Artwork uploaded!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artwork = Artwork::findOrFail($id);
        return view('pages.show', compact('artwork'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artwork = Artwork::fineorFail($id);
        return view('pages.edit', compact('artwork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $artwork = Artwork::findorFail($id);
        $artwork -> update([
            'title' => $request->input('title', $artwork->title),
            'description' => $request->input('description', $artwork->description),
        ]);

        return redirect()->route('pages.show', $artwork->id)->with('success', 'Artwork updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artwork = Artwork::findOrFail($id);

        if($artwork->image_path && \Storage::disk('public')->exists($artwork->image_path)){
            \Storage::disk('public')->delete($artwork->image_path);
        }

        $artwork->delete();
        return redirect()->back()->with('success', 'Artwork deleted successfully');
    }
}
