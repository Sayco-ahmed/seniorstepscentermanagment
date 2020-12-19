<?php

namespace App;

use App\Models\faculty;
use App\Models\student;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    
    protected $table = 'universities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'  
    ];

    
    public function faculty(){
        return $this->hasMany(faculty::class , 'universityId' , 'id');
    }

    public function student(){
        return $this->hasMany(student::class , 'unversityId' , 'id');
    }

}
