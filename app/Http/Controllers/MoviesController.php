<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Flash;

use App\Http\Requests;
use App\Http\Controllers\Controller;



class MoviesController extends Controller
{
  public function index()

  {
    $movies = Movie::all();
    return view('movies.index', compact('movies'));
  }

  public function create()

  {
    return view('movies.create');
  }

  public function store(Request $request)

  {
    $this->validate($request, [
    'Name' => 'required',
    'description' => 'required',
    ]);

    flash()->success('Successfully added!');

    $movie = new Movie($request->all());
    $movie->save();
    return redirect('/movies');
  }

  public function show(Movie $movies)

  {
    return view('movies.show', compact('movies'));
  }

  public function destroy(Movie $movies)

  {
    $movies->delete();
    return redirect('/movies');
  }

  public function edit($id)

  {
    $movie = Movie::findOrFail($id);
    return view('movies.edit')->withMovie($movie);
  }

  public function update(Request $request, Movie $movies)

  {
    $this->validate($request, [
    'Name' => 'required',
    'description' => 'required'
    ]);

    $movies->update($request->all());
    return redirect('/movies');
  }
}
