<?php

namespace App\Http\Controllers;

use App\Models\Movie;
// use Illuminate\Http\Request;
// use App\Models\Category;


class MovieController extends Controller
{
    public function homepage()
    {
        $movies = Movie::latest()->paginate(6);
        return view ('homepage', compact('movies'));
    }
}
    // public function index()
    // {
    //     $movies = Movie::latest()->paginate(10);
    //     return view('Movie.index',['movies'=>$movies]);
    // }

    // public function create()
    // {
    //     $categories = Category::all();
    //     return view('movie.create', compact('categories'));
    // }



    // public function edit(string $id)
    // {
    //     $movie = movie::find($id);
    //     return view('movie.edit',compact('movie'));
    // }

    // public function update(Request $request, string $id)
    // {
    // $validated = $request->validate([
    //     'title' => 'required|string|max:255',
    //     'slug' => 'required|string|max:255|unique:movies,slug,' . $id,
    //     'synopsis' => 'required|string',
    //     'category_id' => 'required|numeric|exists:categories,id',
    //     'year' => 'required|numeric|digits:4|min:1900|max:' . date('Y'),
    //     'actors' => 'nullable|string',
    //     'cover_image' => 'nullable|string|max:255',
    // ]);
    // $movie = Movie::findOrFail($id);
    // $movie->update($validated);
    // return redirect()->route('movie.index')->with('success', 'Data film berhasil diperbarui!');
    // }


    // public function destroy(string $id)
    // {
    //     $movies = Movie::find($id);
    //     $movies->delete();
    //     return redirect()->route('movie.index');
    // }}
