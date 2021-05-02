<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Imports\ProfessionImport;
use App\Imports\ProfessionSpecialityImport;
use App\Imports\SpecialtiesImport;
use App\Imports\SubjectImport;
use App\Imports\UniversityImport;
use App\Imports\SpecialtySubjectImport;
use App\Imports\SpecialtyUniversityImport;
use App\Imports\ProfessionSubjectImport;
use Maatwebsite\Excel\Facades\Excel;


class ImportController extends Controller
{
    public function index(){
        return view('import.index');
    }
    public function load(Request $request){
        Excel::import(new ProfessionSubjectImport(), $request->document);
        return redirect()->route('import');
    }
    
        //Excel::import(new ProfessionImport(), 'excel/professions.xlsx');
        //Excel::import(new ProfessionSpecialityImport, 'excel/profession_specialty.xlsx');
        //Excel::import(new SpecialtiesImport(), 'excel/specialties.xlsx');
        //Excel::import(new SpecialitySubjectImport, 'excel/specialty_subject.xlsx');
        //Excel::import(new SpecialityUniversityImport, 'excel/specialty_university.xlsx');
        //Excel::import(new SubjectImport, 'excel/subjects.xlsx');
        //Excel::import(new UniversitiesImport, 'excel/universities.xlsx');
}
