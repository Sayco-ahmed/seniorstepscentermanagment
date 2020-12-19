<?php

namespace App\Models;

use App\University;
use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    protected $table = 'faculties';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'facultyName',
        'universityId',
    ];

    public function student(){
        return $this->hasMany(student::class , 'facultyId' , 'id');
    }

    public function university(){
        return $this->belongsTo(University::class , 'universityId' , 'id');
    }
}
