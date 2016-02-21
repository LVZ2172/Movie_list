<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Movie;

class MovieTest extends TestCase
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

    public function testNewMovieAddition()
    {
      $this->visit('/movies/create')
        ->type('new movie', 'Name')
        ->type('new description', 'description')
        ->press('Create New Movie')
        ->seePageIs('/movies');
    }

    public function testMovieDisplayedOnIndexPage()
    {
      $movie = new App\Movie;
      $movie->create(['Name' => 'Ghost in the Shell', 'description' => 'description of movie']);
      $this->visit('/movies')
           ->see('Ghost in the Shell');
    }

    public function testMovieDelete()
    {
      $movie = new App\Movie;
      $movie->create(['Name' => 'Ghost in the Shell', 'description' => 'description of movie']);
      $this->visit('/movies')
           ->press('Delete this movie?')
           ->seePageIs('/movies');
    }

    public function testMovieValidation()
    {
      $this->visit('/movies/create')
           ->type('', 'Name')
           ->type('', 'description')
           ->press('Create New Movie')
           ->seePageIs('/');
    }
}
