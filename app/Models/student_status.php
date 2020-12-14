<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student_status extends Model
{
    protected $table = 'student_statuses';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'statusName'
    ];
}
