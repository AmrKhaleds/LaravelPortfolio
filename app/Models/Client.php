<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use HasFactory, SoftDeletes, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name', 
        'username', 
        'email', 
        'password', 
        'phone', 
        'status', 
        'project_type', 
        'image'
    ]; 
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'confirm-password',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'project_type' => 'array'
    ];

    public function ClientCalendar(){
        return $this->hasOne(ClientCalendar::class);
    }
    
    public function ClientProject(){
        return $this->hasMany(ClientProject::class);
    }

    public function client_project_photos(){
        return $this->hasMany(ClientProjectPhotos::class);
    }

    public function client_project_videos(){
        return $this->hasMany(ClientProjectVideos::class);
    }
}
