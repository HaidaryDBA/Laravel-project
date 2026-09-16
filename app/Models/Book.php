<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable =[
        "title",
        "description",
        "isbn",
        "published_year",
        "author_id",
        "category_id",
    ];
}
