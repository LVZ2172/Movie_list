<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Review;
use App\Movie;

class ReviewTest extends TestCase
{
  use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testAddaReview()
    {
      $movie = new App\Movie;
      $movie->create(['Name' => 'Ghost in the Shell', 'description' => 'description of movie', 'movie_id' => 24]);
      $this->visit('movies/24')
          //  ->click('Add Review')
          //  ->type('blah', "Author")
          //  ->type('blahblah', "Review")
          //  ->press('Create Review')
           ->see('Ghost in the Shell');
    }
}
