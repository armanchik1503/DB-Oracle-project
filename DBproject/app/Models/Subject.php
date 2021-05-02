<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['profession_id', 'subject_id'];
    public $timestamps = null;

    public function specialties()
    {
        return $this->belongsToMany('App\Models\Specialty', 'specialty_subject', 'subject_id', 'specialty_id');
    }
    public function professions()
    {
        return $this->belongsToMany('App\Models\Profession', 'profession_subject', 'subject_id', 'profession_id');
    }
}
