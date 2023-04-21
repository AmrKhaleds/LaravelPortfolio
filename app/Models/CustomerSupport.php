<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSupport extends Model
{
    use HasFactory;

    protected $table = "customer_support";
    protected $fillable = ['client_name', 'client_email', 'client_phone',  'subject', 'msg'];
}
