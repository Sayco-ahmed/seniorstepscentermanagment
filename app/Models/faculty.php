<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    protected $table = 'faculties';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'facultyName',
        'universityId',
    ];
}
