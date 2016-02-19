<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Review;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
    public function create($id)
    {
      $movie = Movie::findOrFail($id);
      return view('movies.reviews.create')->withMovie($movie);
    }

    public function store(Request $request, Movie $movies)
    {
      $this->validate($request, [
      'author' => 'required',
      'review' => 'required'
      ]);

      $review = new Review(['author' => $request->author, 'review' => $request->review]);
      $movies->reviews()->save($review);
      return redirect()->route('movies.show', ['id' => $movies->id ]);
    }

    public function destroy($id, Review $reviews)
    {
      $reviews->delete();
      return back();
    }
}
