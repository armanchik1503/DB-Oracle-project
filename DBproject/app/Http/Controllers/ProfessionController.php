<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profession;
use App\Models\University;
use App\Models\Subject;
use App\Models\Specialty;

class ProfessionController extends Controller
{
    public function all()
    {
        $subjects = Subject::with("specialties")->get();
        $professions = Profession::all()->take(9);
        $university = University::all();
        $all_professions = Profession::all();
        $specialties = Specialty::all();
        return view('main.index', [
            'subjects' => $subjects,
            'professions' => $professions,
            'all_professions' => $all_professions,
            'specialties' => $specialties,
            'university' => $university,
        ]);
    }

}
