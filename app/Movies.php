<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable=[
    	"IMDB","image","title","description","genre_id"
    ];
}
