<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $fillable = ['id', 'name', 'ans1', 'ans2'];
    public $timestamps = null;

    protected $table = 'professions';


    public function specialties()
    {
        return $this->belongsToMany('App\Models\Specialty', 'profession_specialty', 'profession_id', 'specialty_id');
    }
    public function subjects()
    {
        return $this->belongsToMany('App\Models\Subject', 'profession_subject', 'profession_id', 'subject_id');
    }
}
