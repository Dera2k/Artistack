<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtworkController extends Controller
{
    // Display all artworks
    public function index()
    {
        $artworks = Artwork::paginate(9);

        return view('artworks.index', compact('artworks'));
    }

    // Show artwork creation form
    public function create()
    {
        return view('artworks.create');
    }

    // Store a new artwork
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => ['required', 'image', 'max:2048'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:2000'],
        ]);

        $path = $request->file('image')->store('artworks', 'public');

        Artwork::create([
            'image_path' => $path,
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);

        return redirect()
            ->route('artworks.index')
            ->with('success', 'Artwork uploaded successfully.');
    }

    // Display a single artwork
    public function show(Artwork $artwork)
    {
        return view('artworks.show', compact('artwork'));
    }

    // Show artwork edit form
    public function edit(Artwork $artwork)
    {
        return view('artworks.edit', compact('artwork'));
    }

    // Update an artwork
    public function update(Request $request, Artwork $artwork)
    {
        $validated = $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:2000'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            if ($artwork->image_path && Storage::disk('public')->exists($artwork->image_path)) {
                Storage::disk('public')->delete($artwork->image_path);
            }

            $validated['image_path'] = $request
                ->file('image')
                ->store('artworks', 'public');
        }

        unset($validated['image']);

        $artwork->update($validated);

        return redirect()
            ->route('artworks.show', $artwork)
            ->with('success', 'Artwork updated successfully.');
    }

    // Delete an artwork
    public function destroy(Artwork $artwork)
    {
        if (
            $artwork->image_path &&
            Storage::disk('public')->exists($artwork->image_path)
        ) {
            Storage::disk('public')->delete($artwork->image_path);
        }

        $artwork->delete();

        return redirect()
            ->route('artworks.index')
            ->with('success', 'Artwork deleted successfully.');
    }
}