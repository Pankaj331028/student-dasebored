<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Student extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia ;
    protected $fillable=['rollno','name','contect','class','image','subject'];
}
