<?php

namespace App\Http\Controllers;
use App\Models\University;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function show(){
        $universities = University::all()->whereNotNull('photo')->take(9);
        return view('universities.index',[
            'universities' => $universities,
        ]);
    }
}
