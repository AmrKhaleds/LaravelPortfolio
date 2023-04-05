<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $table = 'projects';
    
    protected $fillable = ['name', 'slug', 'short_description', 'image','long_description', 'brand_logo', 'client', 'industry', 'services', 'date', 'website'];
}
