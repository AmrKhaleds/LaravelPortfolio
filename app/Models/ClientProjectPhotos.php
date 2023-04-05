<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientProjectPhotos extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'photo_name'];

    public function client_project(){
        return $this->belongsTo(ClientProject::class);
    }
}
