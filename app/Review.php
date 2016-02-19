<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  protected $fillable = [
    'author', 'review',
  ];

  public function movie()
  {
    return $this->belongsTo(Movie::class);
  }

}
