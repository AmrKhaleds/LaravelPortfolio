<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarConroller extends Controller
{
    public function index(){
        return view('admin.calendar.index');
    } 
}
