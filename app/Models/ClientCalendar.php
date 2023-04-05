<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCalendar extends Model
{
    use HasFactory;

    protected $table = 'client_calendar';
    protected $fillable = ['client_id', 'event_name', 'event_start', 'event_end'];

    public function client(){
        return $this->belongsTo(Client::class);
    }

}
