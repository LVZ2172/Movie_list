<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Movie extends Model
{
  protected $fillable = [
    'Name', 'description',
  ];

  public function reviews()
  {
    return $this->hasMany(Review::class);
  }

}
