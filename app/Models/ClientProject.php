<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientProject extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'project_name', 'client_id', 'start_at', 'end_at', 'progress', 'external_photos_link', 'external_videos_link', 'report'];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function client_project_photos(){
        return $this->hasMany(ClientProjectPhotos::class, 'project_id');
    }

    public function client_project_videos(){
        return $this->hasMany(ClientProjectVideos::class, 'project_id');
    }
    /**
     * boot Method run when you model is called
     */
    protected static function boot(){
        parent::boot();

        // Deleting method called when there is any delete request
        static::deleting(function($project){
            $clientUsername = Client::find($project->client_id)->username;

            $photoDir = 'public/clients/photos/' . $clientUsername . '/';
            $videoDir = 'public/clients/videos/' . $clientUsername . '/';
            // Delete all associated photos and their photos files
            $project->client_project_photos->each(function($photo) use ($photoDir){
                $imagePath = storage_path('app/' . $photoDir . $photo->photo_name);
                unlink($imagePath);
                $photo->delete();
            });
            // Delete all associated videos and their video files
            $project->client_project_videos->each(function($video) use ($videoDir){
                $videoDir = storage_path('app/' . $videoDir . $video->video_name);
                // dd($videoDir);
                unlink($videoDir);
                $video->delete();
            });
        });
    }
}
