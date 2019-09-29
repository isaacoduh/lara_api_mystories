<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Add fillable attributes
     */
    protected $fillable = ['title', 'body'];

}
