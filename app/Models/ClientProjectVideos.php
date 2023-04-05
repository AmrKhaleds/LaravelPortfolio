<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientProjectVideos extends Model
{
    use HasFactory;

    protected $table = 'client_project_videos';
    protected $fillable = ['project_id', 'video_name'];

    public function client_project(){
        $this->belongsTo(ClientProject::class);
    }
}
