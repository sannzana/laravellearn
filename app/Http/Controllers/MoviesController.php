<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MoviesController extends Controller
{

    public function index()
    {
        $movies = Movies::all();
        return view('movies.index', compact('movies'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'description' => 'required|string',
            'rating' => 'required|string|max:255',
            'show_times' => 'required|string',
            'language' => 'required|string|max:255',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/movies', 'public');

            $imagePath = $request->file('image')->store('public/movies');
            $validated['image_url'] = Storage::url($imagePath); // This will store the image and give you a public URL
        }

        // Convert show_times from a comma-separated string to an array
        $validated['show_times'] = explode(',', $request->input('show_times'));

        // Create a new movie record using the validated data
        $movie = Movies::create($validated);

        // Redirect or return a response
        return redirect('/movies')->with('success', 'Movie added successfully!');
    }


}
