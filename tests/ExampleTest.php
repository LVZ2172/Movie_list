<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testCreateMovieRoute()
    {
        $this->visit('/movies');
        $this->click('Add Movie');
        $this->see('Create New Movie');
        $this->seePageIs('/movies/create');
    }
}
