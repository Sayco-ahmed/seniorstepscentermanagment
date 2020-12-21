<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rounds_trainer extends Model
{
    //main settings
    protected $table = 'round_trainer';
    protected $primaryKey = 'id';
   
    protected $fillable = [
        'trainerId',
        'roundId'
        
    ];

}
