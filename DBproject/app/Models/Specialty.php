<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $fillable = ['name', 'code'];
    public $timestamps = null;
    protected $table = 'specialties';
    public function subjects()
    {
        return $this->belongsToMany('App\Models\Subject', 'specialty_subject', 'specialty_id', 'subject_id');
    }

    public function professions()
    {
        return $this->belongsToMany('App\Models\Profession', 'profession_specialty', 'specialty_id', 'profession_id');
    }

    /*public function specialties()
    {
        return $this->belongsToMany('App\Models\Specialty', 'specialty_subject', 'specialty_id', 'subject_id');
    }*/

    public function universities()
    {
        return $this->belongsToMany('App\Models\University', 'specialty_university', 'specialty_id', 'university_id');
    }
}
