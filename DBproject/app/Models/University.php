<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = "universities";
    //protected $table = "specialty_university";

    public function specialties()
    {
        return $this->belongsToMany('App\Models\Specialty', 'specialty_university', 'university_id', 'specialty_id');
    }
}
