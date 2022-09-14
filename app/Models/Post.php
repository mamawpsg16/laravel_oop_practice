<?php

namespace App\Models;

use App\Traits\PostTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use PostTrait;
    protected $fillable = ['title','casts','genre','time_to_read'];
}
