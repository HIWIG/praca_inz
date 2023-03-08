<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function create()
    {
        $locations = Location::pluck('name', 'id');
        return view('file.create', compact('locations'));
    }

    public function GetLocationTable(){
        return DB::table('locations');
    }
}
