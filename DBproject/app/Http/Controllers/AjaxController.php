<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialty;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function index(Request $request){
        //$specialty = Subject::with('specialties')->where('id', $id)->get();
        $res = DB::select('select return_spec(?) as value from dual', [$request->id_spec]);
        $name_uni = DB::select('select return_uni(?) as value from dual', [$request->id_uni]);

        return response()->json(['data' => $res,
        'res' => $name_uni]);
    }
}
